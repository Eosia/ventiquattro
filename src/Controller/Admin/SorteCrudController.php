<?php

namespace App\Controller\Admin;

use App\Entity\Sorte;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SorteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Sorte::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            SlugField::new('slug')->setTargetFieldName('nom')->hideOnForm()->hideOnIndex(),
        ];
    }

}
