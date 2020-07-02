<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\CrewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/crew", name="crew_")
 */
class CrewController extends AbstractController
{
    private CrewRepository $crewRepository;

    public function __construct(CrewRepository $crewRepository)
    {
        $this->crewRepository = $crewRepository;
    }

    /**
     * @Route("/", name="overview")
     */
    public function index(): Response
    {
        $crewMembers = $this->crewRepository->findAll();

        return $this->render('Crew/overview.html.twig', [
            'crewMembers' => $crewMembers,
        ]);
    }

    /**
     * @Route("/{id}", name="detail")
     */
    public function detail(string $id): Response
    {
        $crewMember = $this->crewRepository->findOneById($id);

        return $this->render('Crew/detail.html.twig', [
            'crewMember' => $crewMember,
        ]);
    }
}
