<?php

declare(strict_types=1);

namespace App\Twig\Components\ModalForm;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModalFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'name',
                options: [
                    'attr' => [
                        'maxLength' => 255,
                    ],
                ],
            )
            ->add(
                'date',
                DateType::class,
                options: [
                    'required' => false,
                    'html5' => false,
                    'widget' => 'single_text',
                    'attr' => [
                        'data-controller' => 'date-picker',
                    ],
                ],
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ModalFormDto::class,
        ]);
    }
}
