<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240305040813 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipement (id INT AUTO_INCREMENT NOT NULL, parking TINYINT(1) NOT NULL, nbr_chambre INT NOT NULL, internet TINYINT(1) NOT NULL, climatisation TINYINT(1) NOT NULL, types_de_chambre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE logement (id INT AUTO_INCREMENT NOT NULL, equipement_id INT DEFAULT NULL, localisation VARCHAR(255) NOT NULL, num INT NOT NULL, note_moyenne INT NOT NULL, prix INT NOT NULL, etat VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, type_log VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_F0FD4457806F0F5C (equipement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE logement ADD CONSTRAINT FK_F0FD4457806F0F5C FOREIGN KEY (equipement_id) REFERENCES equipement (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE logement DROP FOREIGN KEY FK_F0FD4457806F0F5C');
        $this->addSql('DROP TABLE equipement');
        $this->addSql('DROP TABLE logement');
    }
}
