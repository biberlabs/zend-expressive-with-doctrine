<?php
namespace App\Action;

use Doctrine\ORM\EntityManager;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

class User
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $userRepository = $this->em->getRepository('App\Entity\User');
        $users = $userRepository->findAll();

        $userArray = [];
        /**
         * @var \App\Entity\User $user
         */
        foreach ($users as $user) {
            $userArray[] = $user->toArray();
        }

        return new JsonResponse($userArray);
    }
}
