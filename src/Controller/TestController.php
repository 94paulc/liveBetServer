<?php
// src/Controller/TestController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route("/api/test", name="test")
     */
    public function test(): JsonResponse
    {
        return new JsonResponse(
            [
                'key' => 'value'
            ]
        );
    }
}
