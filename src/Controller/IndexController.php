<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function home(): Response
    {
        return $this->render('index/home.html.twig');
    }

    public function login(): Response
    {
        return $this->render('index/login.html.twig');
    }

    public function config(string $param1, string $param2): Response
    {
        return $this->render('index/config.html.twig', [
            'p1' => $param1,
            'p2' => $param2,
            'nome' => 'Zezim das Tapiocas',
        ]);
    }
}