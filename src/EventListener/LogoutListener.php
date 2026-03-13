<?php

namespace App\EventListener;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Event\LogoutEvent;

class LogoutListener
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function onLogout(LogoutEvent $event): void
    {
        $token = $event->getToken();

        if (!$token) {
            return;
        }

        $user = $token->getUser();

        if ($user instanceof User) {

            // utilisateur déconnecté
            $user->setIsEnable(false);

            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }
    }
}
