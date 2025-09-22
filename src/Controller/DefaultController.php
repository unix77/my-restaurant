<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

// this is the base route of this controller
#[Route('/')]
class DefaultController extends AbstractController
{

  #[Route('/', name: 'default_index')]
  public function index()
  {
    return new JsonResponse([
      'action' => 'index'
    ]);
  }
}
