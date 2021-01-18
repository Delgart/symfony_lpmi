<?php

namespace App\Controller;

use App\Entity\Cake;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CakeController extends AbstractController
{
    /**
     * @Route("/cake", name="cake")
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function createCake(EntityManagerInterface $entityManager): Response
    {
        $cake = new Cake();
        $cake->setCake('Charlotte à la poire');
        $cake->setIsSweet('yes');

        $entityManager->persist($cake);

        $entityManager->flush();

        return new Response('Saved new record with '.$cake->getId());
    }
}
