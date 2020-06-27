<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ShipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ships", name="ship_")
 */
class ShipController extends AbstractController
{
    private ShipRepository $shipRepository;

    public function __construct(ShipRepository $shipRepository)
    {
        $this->shipRepository = $shipRepository;
    }

    /**
     * @Route("/", name="overview")
     */
    public function index()
    {
        $landingPads = $this->shipRepository->findAll();

        return $this->render('ships/overview.html.twig', [
            'ships' => $landingPads,
        ]);
    }

    /**
     * @Route("/{id}", name="detail")
     */
    public function detail(string $id)
    {
        $landingPad = $this->shipRepository->findOneById($id);

        return $this->render('ships/detail.html.twig', [
            'ship' => $landingPad,
        ]);
    }
}
