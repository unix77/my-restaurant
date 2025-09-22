<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

// this is the base route of this controller
#[Route('/map/{mapId}')]
class TableController extends AbstractController
{
  #[Route('/tables', methods: ['GET'])]
  public function allTables(Request $request)
  {
    $limit = $request->get('limit', '10');
    return new JsonResponse([
      'tableName' => 'yourTable',
      'limit' => $limit
    ]);
  }

  #[Route('/table/{tableId}', methods: ['GET'], name: 'table', defaults: ['tableId' => 1])]
  public function table($tableId)
  {
    return new JsonResponse([
      'tableName' => 'yourTable',
      'tableId' => $tableId
    ]);
  }
}
