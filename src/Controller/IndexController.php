<?php

declare(strict_types=1);

namespace App\Controller;

use App\Twig\Components\ModalForm\ModalFormDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function modal(): Response
    {
        return $this->render(
            'modal.html.twig',
            ['formData' => new ModalFormDto()],
        );
    }
}
