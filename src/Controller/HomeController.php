<?php

namespace App\Controller;

use App\Entity\TasksSearch;
use App\Form\TasksSearchType;
use App\Repository\TasksRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function index(TasksRepository $repository, PaginatorInterface $paginator, Request $request) : Response
    {
        $search = new TasksSearch();
        $form = $this->createForm(TasksSearchType::class, $search);
        $form->handleRequest($request);

        $tasks = $paginator->paginate(
            $repository->findAllQuery($search),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('home/index.html.twig', [
            'tasks' => $tasks,
            'form' => $form->createView()
        ]);
    }
}
