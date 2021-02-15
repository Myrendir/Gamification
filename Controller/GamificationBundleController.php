<?php

namespace App\GamificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GamificationBundleController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */

    public function index(): Response
    {
        die('test');
    }
}
