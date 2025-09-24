<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

// this is the base route of this controller
#[Route('/map')]
class RestaurantMapController extends AbstractController
{

  #[Route('/{id}', methods: ['GET'], name: 'map')]
  public function restaurantPlan($id)
  {
    return new JsonResponse([
      'plan' => 'yourPlan',
      'id' => $id
    ]);
  }
}
