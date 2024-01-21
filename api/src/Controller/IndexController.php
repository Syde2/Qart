<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class IndexController extends AbstractController
{
	#[Route('/')]
    public function number(): Response
    {
        $placeholder = 'Debug Page';

        return new Response(
            '<html><body>'.$placeholder.'</body></html>'
        );
    }
}