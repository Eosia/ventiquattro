<?php

namespace App\Controller\Admin;

use App\Entity\Vin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VinCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vin::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('type', 'Type de vin'),
            TextField::new('nom'),
            TextEditorField::new('description'),
            MoneyField::new('prix')->setCurrency('EUR'),
            BooleanField::new('stock'),
        ];
    }

}
