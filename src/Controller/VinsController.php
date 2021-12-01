<?php

namespace App\Controller;

use App\Repository\TypeRepository;
use App\Repository\VinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinsController extends AbstractController
{

    private $repoVin;
    private $repoType;

    public function __construct(VinRepository $repoVin, TypeRepository $repoType)
    {
        $this->repoVin = $repoVin;
        $this->repoType = $repoType;
    }



    /**
     * @Route("/vins", name="vins")
     */
    public function index(): Response
    {

        $types = $this->repoType->findAll();

        $vin = $this->repoVin->findAll();

        $vins = $this->repoVin->findAll();

        return $this->render('vins/index.html.twig', [
            'vin' => $vin,
            'vins' => $vins,
            'types' => $types
        ]);
    }
}
