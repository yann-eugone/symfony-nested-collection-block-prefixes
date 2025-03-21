<?php

declare(strict_types=1);

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

final class TaskListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options = []): void
    {
        $builder->add('tasks', CollectionType::class, [
            'entry_type' => TaskType::class,
        ]);
    }

    public function getParent()
    {
        return EmbeddedType::class;
    }
}

