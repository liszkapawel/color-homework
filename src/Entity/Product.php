<?php
declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct implements ProductInterface
{
    public const COLOR_RED = 'red';
    public const COLOR_BLUE = 'blue';
    public const COLOR_GREEN = 'green';

    /** @var string */
    private $color;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): void
    {
        $this->color = $color;
    }
}
