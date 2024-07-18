<?php

namespace App\Product\Application\Controller;

use App\Product\Domain\Repository\ProductRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'products', methods: ['GET'])]
    public function list(Request $request, ProductRepositoryInterface $productRepository): Response
    {
        $products = $productRepository->search(
            $request->get('page', 1),
            $request->get('limit', 20)
        );

        $total = $productRepository->count();

        return $this->render('product/product_list.html.twig', [
            'products' => $products,
            'page' => $request->get('page', 1),
            'pages_count' => ceil($total / $request->get('limit', 20)),
            'total' => $total,
        ]);
    }
}
