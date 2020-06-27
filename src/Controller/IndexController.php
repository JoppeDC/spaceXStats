<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\CompanyInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    private CompanyInfoRepository $companyInfoRepository;

    public function __construct(CompanyInfoRepository $companyInfoRepository)
    {
        $this->companyInfoRepository = $companyInfoRepository;
    }

    /**
     * @Route("/", name="index")
     */
    public function index(Request $request)
    {
        $companyInfo = $this->companyInfoRepository->findOne();

        return $this->render('index.html.twig', [
            'info' => $companyInfo,
        ]);
    }
}
