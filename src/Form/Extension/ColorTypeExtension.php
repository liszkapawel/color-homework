<?php
declare(strict_types=1);

namespace App\Form\Extension;

use App\Entity\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ColorTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('color', ChoiceType::class, [
                'choices' => [
                    'Red' => Product::COLOR_RED,
                    'Blue' => Product::COLOR_BLUE,
                    'Green' => Product::COLOR_GREEN,
                ],
            ])
        ;
    }


    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }

}
