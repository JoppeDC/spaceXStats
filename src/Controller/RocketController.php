<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\RocketRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/rockets", name="rocket_")
 */
class RocketController extends AbstractController
{
    private RocketRepository $repository;

    public function __construct(RocketRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/", name="overview")
     */
    public function index(): Response
    {
        $rockets = $this->repository->findAll();

        return $this->render('Rockets/overview.html.twig', [
            'rockets' => $rockets,
        ]);
    }

    /**
     * @Route("/{id}", name="detail")
     */
    public function detail(string $id): Response
    {
        $rocket = $this->repository->findOneById($id);

        return $this->render('Rockets/detail.html.twig', [
            'rocket' => $rocket,
        ]);
    }
}
