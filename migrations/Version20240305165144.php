<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240305165144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activitee (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, localisation VARCHAR(255) NOT NULL, nb_p INT NOT NULL, etat VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, description_act VARCHAR(255) NOT NULL, INDEX IDX_82BFEBE4BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, type_categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE moyen_transport (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, capacite INT NOT NULL, lieu VARCHAR(255) NOT NULL, etat TINYINT(1) NOT NULL, valide TINYINT(1) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image_plat VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plats_restaurants (plat_id INT NOT NULL, restaurant_id INT NOT NULL, INDEX IDX_B4EBD02BD73DB560 (plat_id), INDEX IDX_B4EBD02BB1E7706E (restaurant_id), PRIMARY KEY(plat_id, restaurant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, reponse_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description_reclamation VARCHAR(255) NOT NULL, etat TINYINT(1) NOT NULL, date DATE NOT NULL, image VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_CE606404CF18BB82 (reponse_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, numdetel VARCHAR(255) NOT NULL, nmbetoiles INT NOT NULL, image_restaurant VARCHAR(255) NOT NULL, heure_ouverture VARCHAR(255) DEFAULT NULL, heure_fermeture VARCHAR(255) DEFAULT NULL, favoris TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trajet (id INT AUTO_INCREMENT NOT NULL, moyen_transport_id INT DEFAULT NULL, lieu_depart VARCHAR(255) NOT NULL, lieu_arrivee VARCHAR(255) NOT NULL, heure TIME NOT NULL, date DATE NOT NULL, INDEX IDX_2B5BA98C3ED8D53F (moyen_transport_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activitee ADD CONSTRAINT FK_82BFEBE4BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE plats_restaurants ADD CONSTRAINT FK_B4EBD02BD73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plats_restaurants ADD CONSTRAINT FK_B4EBD02BB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404CF18BB82 FOREIGN KEY (reponse_id) REFERENCES reponse (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE trajet ADD CONSTRAINT FK_2B5BA98C3ED8D53F FOREIGN KEY (moyen_transport_id) REFERENCES moyen_transport (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activitee DROP FOREIGN KEY FK_82BFEBE4BCF5E72D');
        $this->addSql('ALTER TABLE plats_restaurants DROP FOREIGN KEY FK_B4EBD02BD73DB560');
        $this->addSql('ALTER TABLE plats_restaurants DROP FOREIGN KEY FK_B4EBD02BB1E7706E');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404CF18BB82');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE trajet DROP FOREIGN KEY FK_2B5BA98C3ED8D53F');
        $this->addSql('DROP TABLE activitee');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE moyen_transport');
        $this->addSql('DROP TABLE plat');
        $this->addSql('DROP TABLE plats_restaurants');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE trajet');
        $this->addSql('DROP TABLE user');
    }
}
