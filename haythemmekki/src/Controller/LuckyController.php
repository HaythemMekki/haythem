<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}")
     */
    
    public function number($max): Response
    {
        if (!is_numeric($max)) {
            throw new HttpException(404, "Not Found");
        }
        $number = random_int(0, $max);
        $phrase = "Lucky number is: ";
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'phrase' => $phrase,
        ]);
    }

    /**
     * @Route("/index")
     */
    public function index(): Response
    {
        $req = Request::createFromGlobals();
        $mail = $req->query;
        return $this->render('lucky/number.html.twig', [
            
        ]);
    }
}
