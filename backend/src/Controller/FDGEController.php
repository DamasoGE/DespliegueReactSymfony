<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FDGEController
{
    #[Route('/api/fdge', name: 'fdge_hello')]
    public function index(): Response
    {
        return new Response('Symfony de Francisco Damaso Gimenez Escudero Responde a la llamada de React');
    }
}