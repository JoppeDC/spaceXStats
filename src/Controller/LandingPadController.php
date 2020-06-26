<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\LandingPadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/landing_pads", name="landing_pads_")
 */
class LandingPadController extends AbstractController
{
    private LandingPadRepository $landingPadRepository;

    public function __construct(LandingPadRepository $landingPadRepository)
    {
        $this->landingPadRepository = $landingPadRepository;
    }

    /**
     * @Route("/", name="overview")
     */
    public function index()
    {
        $landingPads = $this->landingPadRepository->findAll();

        return $this->render('LandingPads/overview.html.twig', [
            'pads' => $landingPads,
        ]);
    }

    /**
     * @Route("/{id}", name="detail")
     */
    public function detail(string $id)
    {
        $landingPad = $this->landingPadRepository->findOneById($id);

        return $this->render('LandingPads/detail.html.twig', [
            'pad' => $landingPad,
        ]);
    }
}
