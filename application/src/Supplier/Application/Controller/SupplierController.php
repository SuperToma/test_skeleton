<?php

namespace App\Supplier\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SupplierController extends AbstractController
{
    #[Route('/suppliers', name: 'suppliers', methods: ['GET'])]
    public function list(Request $request): Response
    {
        return new Response('Suppliers list OK');
    }
}
