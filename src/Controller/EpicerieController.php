<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\GammeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EpicerieController extends AbstractController
{

    private $repoArticle;
    private $repoGamme;

    public function __construct(ArticleRepository $repoArticle, GammeRepository  $repoGamme)
    {
        $this->repoArticle = $repoArticle;
        $this->repoGamme = $repoGamme;
    }

    /**
     * @Route("/epicerie", name="epicerie")
     */
    public function index(): Response
    {

        $gammes = $this->repoGamme->findAll();

        $article = $this->repoArticle->findAll();

        $articles = $this->repoArticle->findAll();

        return $this->render('epicerie/index.html.twig', [
            'article' => $article,
            'articles' => $articles,
            'gammes' => $gammes
        ]);
    }
}
