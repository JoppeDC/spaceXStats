<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\RocketRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function index()
    {
        $rockets = $this->repository->findAll();

        return $this->render('rockets/overview.html.twig', [
            'rockets' => $rockets,
        ]);
    }

    /**
     * @Route("/{id}", name="detail")
     */
    public function detail(string $id)
    {
        $rocket = $this->repository->findOneById($id);

        return $this->render('rockets/detail.html.twig', [
            'rocket' => $rocket,
        ]);
    }
}
