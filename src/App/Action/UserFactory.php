<?php
namespace App\Action;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;

class UserFactory
{
    /**
     * @param \Interop\Container\ContainerInterface $container
     *
     * @return \App\Action\User
     */
    public function __invoke(ContainerInterface $container)
    {
        return new User($container->get(EntityManager::class));
    }
}
