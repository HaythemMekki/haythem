<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        $msg = "welcome World my name is nour boukettaya ";
        return $this->render('home/index.html.twig', [
            'message' => $msg,
        ]);
    }
}
