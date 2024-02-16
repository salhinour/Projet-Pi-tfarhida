<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215103542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipement (id INT AUTO_INCREMENT NOT NULL, parking TINYINT(1) NOT NULL, nbr_chambre INT NOT NULL, internet TINYINT(1) NOT NULL, climatisation TINYINT(1) NOT NULL, types_de_chambre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP INDEX IDX_F0FD445713B22EC4 ON logement');
        $this->addSql('ALTER TABLE logement ADD type_log VARCHAR(255) NOT NULL, DROP type_logement_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE equipement');
        $this->addSql('ALTER TABLE logement ADD type_logement_id INT DEFAULT NULL, DROP type_log');
        $this->addSql('CREATE INDEX IDX_F0FD445713B22EC4 ON logement (type_logement_id)');
    }
}
