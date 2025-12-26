<?php

namespace App\Controller;

use App\DTO\ProductOrder;
use App\Form\ProductOrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/tp', name: 'app_product')]
    public function index(Request $request): Response
    {

        $productOrder = new ProductOrder();


        $form = $this->createForm(ProductOrderType::class, $productOrder);
        $form->handleRequest($request);





        return $this->render('product/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
