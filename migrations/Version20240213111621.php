<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240213111621 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie ADD activite_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT FK_497DD6349B0F88B1 FOREIGN KEY (activite_id) REFERENCES activitee (id)');
        $this->addSql('CREATE INDEX IDX_497DD6349B0F88B1 ON categorie (activite_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY FK_497DD6349B0F88B1');
        $this->addSql('DROP INDEX IDX_497DD6349B0F88B1 ON categorie');
        $this->addSql('ALTER TABLE categorie DROP activite_id');
    }
}
