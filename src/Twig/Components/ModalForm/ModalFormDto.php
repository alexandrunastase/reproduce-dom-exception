<?php

declare(strict_types=1);

namespace App\Twig\Components\ModalForm;

use DateTimeImmutable;
use Symfony\Component\Validator\Constraints as Assert;

class ModalFormDto
{
//    #[Assert\NotBlank(message: 'Name is required')]
//    #[Assert\Length(
//        min: 0,
//        max: 99,
//        minMessage: 'Field must contain at least {{ limit }} characters',
//        maxMessage: 'Field must contain at most {{ limit }} characters',
//    )]
    private ?string $name = null;

    private ?DateTimeImmutable $date = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    // It's okay to allow null here as it's needed by the live form
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getDate(): ?DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(?DateTimeImmutable $date): self
    {
        $this->date = $date;
        return $this;
    }
}
