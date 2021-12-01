<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Boisson;
use App\Entity\Categorie;
use App\Entity\Gamme;
use App\Entity\Plat;
use App\Entity\Sorte;
use App\Entity\Type;
use App\Entity\User;
use App\Entity\Vin;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(ArticleCrudController::class)->generateUrl());

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ventiquattro Panel');
    }

    public function configureMenuItems(): iterable
    {


        yield MenuItem::section('--- Raccourcis ---');
        yield MenuItem::linkToUrl('Retour au site', 'fa fa-globe', '/');
        yield MenuItem::linkToUrl('Déconnexion', 'fas fa-sign-out-alt', 'admin/logout');

        yield MenuItem::section('--- Epicerie ---', 'fas fa-store');
        yield MenuItem::linkToCrud('Gammes', 'fas fa-shopping-cart', Gamme::class);
        yield MenuItem::linkToCrud('Articles', 'fas fa-shopping-basket', Article::class);

        yield MenuItem::section('--- Restaurant ---', 'fas fa-utensils');
        yield MenuItem::linkToCrud('Catégories', 'fas fa-book', Categorie::class);
        yield MenuItem::linkToCrud('Plats', 'fas fa-pizza-slice', Plat::class);

        yield MenuItem::section('--- Boissons ---', 'fas fa-mug-hot');
        yield MenuItem::linkToCrud('Sortes', 'fas fa-cocktail', Sorte::class);
        yield MenuItem::linkToCrud('Boissons', 'fas fa-beer', Boisson::class);

        yield MenuItem::section('--- Cave à vins ---', 'fas fa-wine-glass-alt');
        yield MenuItem::linkToCrud('Types', 'fas fa-palette', Type::class);
        yield MenuItem::linkToCrud('Vins', 'fas fa-wine-bottle', Vin::class);

        yield MenuItem::section('--- Administrateurs ---', 'fas fa-users');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-user-circle', User::class);

    }
}
