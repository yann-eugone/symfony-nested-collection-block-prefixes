<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\Type\TaskChoiceType;
use App\Form\Type\TaskListChoiceType;
use App\Form\Type\TaskListParentChoiceType;
use App\Form\Type\TaskParentChoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AppController extends AbstractController
{
    #[Route('/')]
    public function form(): Response
    {
        $forms = [];

        $data = ['tags' => ['foo']];
        $forms['TaskChoiceType'] = $this->createForm(TaskChoiceType::class, $data);
        $forms['TaskParentChoiceType'] = $this->createForm(TaskParentChoiceType::class, $data);

        $data = ['tasks' => [$data]];
        $forms['TaskListChoiceType'] = $this->createForm(TaskListChoiceType::class, $data);
        $forms['TaskListParentChoiceType'] = $this->createForm(TaskListParentChoiceType::class, $data);

        return $this->render(
            'form.html.twig',
            ['forms' => \array_map(fn(FormInterface $form) => $form->createView(), $forms)],
        );
    }
}
