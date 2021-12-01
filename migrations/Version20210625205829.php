<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210625205829 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD gamme_id INT NOT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66D2FD85F1 FOREIGN KEY (gamme_id) REFERENCES gamme (id)');
        $this->addSql('CREATE INDEX IDX_23A0E66D2FD85F1 ON article (gamme_id)');
        $this->addSql('ALTER TABLE plat ADD categorie_id INT NOT NULL');
        $this->addSql('ALTER TABLE plat ADD CONSTRAINT FK_2038A207BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_2038A207BCF5E72D ON plat (categorie_id)');
        $this->addSql('ALTER TABLE vin ADD type_id INT NOT NULL');
        $this->addSql('ALTER TABLE vin ADD CONSTRAINT FK_B1085141C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_B1085141C54C8C93 ON vin (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66D2FD85F1');
        $this->addSql('DROP INDEX IDX_23A0E66D2FD85F1 ON article');
        $this->addSql('ALTER TABLE article DROP gamme_id');
        $this->addSql('ALTER TABLE plat DROP FOREIGN KEY FK_2038A207BCF5E72D');
        $this->addSql('DROP INDEX IDX_2038A207BCF5E72D ON plat');
        $this->addSql('ALTER TABLE plat DROP categorie_id');
        $this->addSql('ALTER TABLE vin DROP FOREIGN KEY FK_B1085141C54C8C93');
        $this->addSql('DROP INDEX IDX_B1085141C54C8C93 ON vin');
        $this->addSql('ALTER TABLE vin DROP type_id');
    }
}
