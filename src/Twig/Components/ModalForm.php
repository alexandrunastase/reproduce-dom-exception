<?php

declare(strict_types=1);

namespace App\Twig\Components;

use App\Twig\Components\ModalForm\ModalFormDto;
use App\Twig\Components\ModalForm\ModalFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class ModalForm extends AbstractController
{
    use DefaultActionTrait;
    use ComponentWithFormTrait;

    #[LiveProp]
    public ModalFormDto|null $initialFormData = null;

    protected function instantiateForm(): FormInterface
    {
        return $this->createForm(ModalFormType::class, $this->initialFormData);
    }

    #[LiveAction]
    public function save(): Response
    {
        $this->submitForm();
        // perform logic

        return $this->redirectToRoute('index');
    }
}
