<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Category;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    public function list(ManagerRegistry $doctrine): Response
    {
        $categories = $doctrine->getRepository(Category::class)->findAll();

        return $this->render('category/list.html.twig', [
            'categories' => $categories,
        ]);
    }
    
    public function add(ManagerRegistry $doctrine): Response
    {
        // if ($_POST) {

            $category = new Category();
            $category->name = 'Categoria teste';
            $category->description = 'Descrição teste';
        // }

        $doctrine->getManager()->persist($category);

        $doctrine->getManager()->flush();

        return $this->render('category/add.html.twig');
    }
}