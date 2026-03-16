<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class AppAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private EntityManagerInterface $entityManager
    ) {}

    public function authenticate(Request $request): Passport
    {
        $email = (string) $request->request->get('_email', '');
        $password = (string) $request->request->get('_password', '');
        $csrfToken = (string) $request->request->get('_csrf_token', '');

        // Sauvegarde du dernier username
        $request->getSession()->set(
            SecurityRequestAttributes::LAST_USERNAME,
            $email
        );

        return new Passport(
            new UserBadge($email, function (string $userIdentifier): UserInterface {
                /** @var User|null $user */
                $user = $this->entityManager
                    ->getRepository(User::class)
                    ->findOneBy(['email' => $userIdentifier]);

                if (!$user) {
                    throw new UserNotFoundException(
                        sprintf('Utilisateur "%s" non trouvé.', $userIdentifier)
                    );
                }

                // Ici tu peux décider d’empêcher la connexion si isEnable = false
                // if (!$user->isEnable()) {
                //     throw new CustomUserMessageAuthenticationException('Votre compte est désactivé.');
                // }

                // L’utilisateur existe et est en train de se connecter -> isEnable = true
                $user->setIsEnable(true);
                // Pas besoin de persist, l’entity est déjà managed
                $this->entityManager->flush();

                return $user;
            }),
            new PasswordCredentials($password),
            [
                new CsrfTokenBadge('authenticate', $csrfToken),
                new RememberMeBadge(),
            ]
        );
    }
    public function onAuthenticationSuccess(
        Request $request,
        TokenInterface $token,
        string $firewallName
    ): ?Response {

        $user = $token->getUser();

        if (!$user instanceof User) {
            return new RedirectResponse(
                $this->urlGenerator->generate('app_login')
            );
        }

        // Activation utilisateur
        $user->setIsEnable(true);
        $this->entityManager->flush();

        $roles = $user->getRoles();

        // ADMIN
        if (in_array('ROLE_ADMIN', $roles, true)) {

            if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
                return new RedirectResponse($targetPath);
            }

            return new RedirectResponse(
                $this->urlGenerator->generate('app_admin')
            );
        }

        // USER
        if (in_array('ROLE_USER', $roles, true)) {

            return new RedirectResponse(
                $this->urlGenerator->generate('app_user')
            );
        }

        // fallback
        return new RedirectResponse(
            $this->urlGenerator->generate('app_home')
        );
    }


    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
