<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240213112222 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activitee ADD categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activitee ADD CONSTRAINT FK_82BFEBE4BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_82BFEBE4BCF5E72D ON activitee (categorie_id)');
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY FK_497DD6349B0F88B1');
        $this->addSql('DROP INDEX IDX_497DD6349B0F88B1 ON categorie');
        $this->addSql('ALTER TABLE categorie DROP activite_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activitee DROP FOREIGN KEY FK_82BFEBE4BCF5E72D');
        $this->addSql('DROP INDEX IDX_82BFEBE4BCF5E72D ON activitee');
        $this->addSql('ALTER TABLE activitee DROP categorie_id');
        $this->addSql('ALTER TABLE categorie ADD activite_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT FK_497DD6349B0F88B1 FOREIGN KEY (activite_id) REFERENCES activitee (id)');
        $this->addSql('CREATE INDEX IDX_497DD6349B0F88B1 ON categorie (activite_id)');
    }
}
