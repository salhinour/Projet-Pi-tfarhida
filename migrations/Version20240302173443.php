<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240302173443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE logement DROP FOREIGN KEY FK_F0FD4457806F0F5C');
        $this->addSql('ALTER TABLE logement CHANGE etat etat VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE logement ADD CONSTRAINT FK_F0FD4457806F0F5C FOREIGN KEY (equipement_id) REFERENCES equipement (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE logement DROP FOREIGN KEY FK_F0FD4457806F0F5C');
        $this->addSql('ALTER TABLE logement CHANGE etat etat TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE logement ADD CONSTRAINT FK_F0FD4457806F0F5C FOREIGN KEY (equipement_id) REFERENCES equipement (id)');
    }
}
