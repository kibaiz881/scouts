<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260319085829 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_enable TINYINT NOT NULL, sampana_id INT NOT NULL, INDEX IDX_64C19C1ED5A3FDC (sampana_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE fivondronana (id INT AUTO_INCREMENT NOT NULL, code_fiv VARCHAR(20) NOT NULL, nom_fiv VARCHAR(100) NOT NULL, adresse_fiv VARCHAR(200) NOT NULL, paroise_fiv VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, contact_fiv VARCHAR(18) NOT NULL, email_fiv VARCHAR(255) NOT NULL, historique_fiv LONGTEXT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, posted_at DATETIME NOT NULL, is_published TINYINT NOT NULL, updated_at DATETIME DEFAULT NULL, post_picture_name VARCHAR(255) DEFAULT NULL, category_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5A8A6C8D12469DE2 (category_id), INDEX IDX_5A8A6C8DA76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE sampana (id INT AUTO_INCREMENT NOT NULL, code_sampana VARCHAR(10) NOT NULL, nom_sampana VARCHAR(50) NOT NULL, effectif_sampana INT NOT NULL, description LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, profile_sampana VARCHAR(255) NOT NULL, sampana_picture_name VARCHAR(255) DEFAULT NULL, fivondronana_id INT NOT NULL, INDEX IDX_1076CA7FCC25CE0 (fivondronana_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, profile_picture_name VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, phone VARCHAR(15) DEFAULT NULL, biography LONGTEXT DEFAULT NULL, date_naissance DATE DEFAULT NULL, lieu_naissance VARCHAR(255) DEFAULT NULL, nationalite VARCHAR(25) DEFAULT NULL, profession VARCHAR(50) DEFAULT NULL, cin VARCHAR(18) DEFAULT NULL, date_delivrance DATE DEFAULT NULL, lieu_delivrance VARCHAR(255) DEFAULT NULL, pays_delivrance VARCHAR(255) DEFAULT NULL, sexe VARCHAR(10) DEFAULT NULL, date_entrescout DATE DEFAULT NULL, fonction_scout VARCHAR(50) DEFAULT NULL, is_enable TINYINT NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1ED5A3FDC FOREIGN KEY (sampana_id) REFERENCES sampana (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE sampana ADD CONSTRAINT FK_1076CA7FCC25CE0 FOREIGN KEY (fivondronana_id) REFERENCES fivondronana (id) ON DELETE RESTRICT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1ED5A3FDC');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D12469DE2');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DA76ED395');
        $this->addSql('ALTER TABLE sampana DROP FOREIGN KEY FK_1076CA7FCC25CE0');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE fivondronana');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE sampana');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
