<?php

declare(strict_types=1);

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

final class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options = []): void
    {
        $builder->add('name');
    }
}

