<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210626190103 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE gamme ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE sorte ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE type ADD slug VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie DROP slug');
        $this->addSql('ALTER TABLE gamme DROP slug');
        $this->addSql('ALTER TABLE sorte DROP slug');
        $this->addSql('ALTER TABLE type DROP slug');
    }
}
