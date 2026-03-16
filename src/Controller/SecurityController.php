<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {

            $user = $this->getUser();
            $roles = $user->getRoles();

            // ADMIN en premier
            if (in_array('ROLE_ADMIN', $roles, true)) {
                return $this->redirectToRoute('app_admin');
            }

            // USER normal
            if (in_array('ROLE_USER', $roles, true)) {
                return $this->redirectToRoute('app_user');
            }

            // fallback
            return $this->redirectToRoute('app_login');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }


    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        $this->addFlash('success', 'Vous avez été déconnecté avec succès.');
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
