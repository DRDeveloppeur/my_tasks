<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Form\TasksType;
use App\Repository\TasksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tasks")
 */
class TasksController extends AbstractController
{

    /**
     * @Route("/new", name="tasks_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $task = new Tasks();
        $form = $this->createForm(TasksType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('tasks/new.html.twig', [
            'task' => $task,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tasks_show", methods={"GET"})
     */
    public function show(Tasks $task): Response
    {
        return $this->render('tasks/show.html.twig', [
            'task' => $task,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tasks_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tasks $task): Response
    {
        $task->setUpdatedAt(new \DateTime());
        $form = $this->createForm(TasksType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('tasks/edit.html.twig', [
            'task' => $task,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tasks_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tasks $task): Response
    {
        if ($this->isCsrfTokenValid('delete'.$task->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($task);
            $entityManager->flush();
        }

        return $this->redirectToRoute('home');
    }
}
