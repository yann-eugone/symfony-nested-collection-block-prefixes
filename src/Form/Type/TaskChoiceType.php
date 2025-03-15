<?php

declare(strict_types=1);

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

final class TaskChoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options = []): void
    {
        $builder->add('tags', CollectionType::class, [
            'entry_type' => ChoiceType::class,
            'entry_options' => [
                'choices' => ['foo' => 'FOO', 'bar' => 'BAR', 'baz' => 'BAZ'],
            ],
        ]);
    }
}

