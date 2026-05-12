<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260512141251 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE beazina (id INT AUTO_INCREMENT NOT NULL, nom_bzn VARCHAR(255) NOT NULL, prenom_bzn VARCHAR(255) DEFAULT NULL, date_naiss DATE NOT NULL, lieu_naiss VARCHAR(100) NOT NULL, nom_pere VARCHAR(255) DEFAULT NULL, nom_mere VARCHAR(255) NOT NULL, adress_bzn VARCHAR(255) NOT NULL, asatao VARCHAR(100) DEFAULT NULL, numero_bzn VARCHAR(255) NOT NULL, created_ad DATETIME NOT NULL, updated_at DATETIME NOT NULL, sampana_id INT NOT NULL, INDEX IDX_FF61E516ED5A3FDC (sampana_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE beazina ADD CONSTRAINT FK_FF61E516ED5A3FDC FOREIGN KEY (sampana_id) REFERENCES sampana (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE beazina DROP FOREIGN KEY FK_FF61E516ED5A3FDC');
        $this->addSql('DROP TABLE beazina');
    }
}
