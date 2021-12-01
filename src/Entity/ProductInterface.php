<?php
declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

interface ProductInterface extends ResourceInterface
{
    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
