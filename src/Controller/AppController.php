<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\Type\TaskManagerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AppController extends AbstractController
{
    #[Route('/')]
    public function form(): Response
    {
        $form = $this->createForm(TaskManagerType::class, [
            'taskLists' => [
                [
                    'tasks' => [
                        ['name' => 'composer create-project symfony/skeleton'],
                        ['name' => 'composer require twig form'],
                        ['name' => 'Add custom code'],
                    ],
                ],
            ],
        ]);

        return $this->render('form.html.twig', ['form' => $form]);
    }
}
