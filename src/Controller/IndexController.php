<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\LandingPadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    private LandingPadRepository $landingPadRepository;

    public function __construct(LandingPadRepository $landingPadRepository)
    {
        $this->landingPadRepository = $landingPadRepository;
    }

    public function __invoke(Request $request)
    {
        dump($this->landingPadRepository->findOneById('5e9e3032383ecb554034e7c9'));
        die();

        return $this->render('base.html.twig');
    }
}
