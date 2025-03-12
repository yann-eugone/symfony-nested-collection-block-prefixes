<?php

declare(strict_types=1);

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

final class TaskManagerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options = []): void
    {
        $builder->add('taskLists', CollectionType::class, [
            'entry_type' => TaskListType::class,
        ]);
    }
}

