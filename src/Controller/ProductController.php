<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product_list')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/api/posts/{id}', name: 'product_show', methods: ['GET'])]
    public function show(): Response
    {
        return $this->render('product/show.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}


