<?php


namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends AbstractController
{
    /**
     * @var ManagerRegistry
     */
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function indexAction(Request $request)
    {
        return new Response('See: <a href="https://github.com/AlexeyTitevalov/SportApi">https://github.com/AlexeyTitevalov/SportApi</a>');
    }

    public function addGameAction(Request $request)
    {

    }

    public function editGameAction($id)
    {
    }

    public function showGameAction($id)
    {
    }

}