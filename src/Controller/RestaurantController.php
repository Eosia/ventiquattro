<?php

namespace App\Controller;

use App\Repository\BoissonRepository;
use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;
use App\Repository\SorteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantController extends AbstractController
{

    private $repoPlat;
    private $repoCategorie;

    private $repoBoisson;
    private $repoSorte;

    public function __construct(PlatRepository $repoPlat, CategorieRepository $repoCategorie, BoissonRepository $repoBoisson, SorteRepository $repoSorte)
    {
        $this->repoPlat = $repoPlat;
        $this->repoCategorie = $repoCategorie;

        $this->repoBoisson = $repoBoisson;
        $this->repoSorte = $repoSorte;
    }



    /**
     * @Route("/restaurant", name="restaurant")
     */
    public function index(): Response
    {


        $categories = $this->repoCategorie->findAll();

        $plat = $this->repoPlat->findAll();

        $plats = $this->repoPlat->findAll();

        $sortes = $this->repoSorte->findAll();

        $boisson = $this->repoBoisson->findAll();

        $boissons = $this->repoBoisson->findAll();




        return $this->render('restaurant/index.html.twig', [
            'plat' => $plat,
            'plats' => $plats,
            'categories' => $categories,
            'boisson' => $boisson,
            'boissons' => $boissons,
            'sortes' => $sortes
        ]);
    }
}
