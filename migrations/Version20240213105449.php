<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240213105449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_logement ADD logement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type_logement ADD CONSTRAINT FK_3D0263AB58ABF955 FOREIGN KEY (logement_id) REFERENCES logement (id)');
        $this->addSql('CREATE INDEX IDX_3D0263AB58ABF955 ON type_logement (logement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_logement DROP FOREIGN KEY FK_3D0263AB58ABF955');
        $this->addSql('DROP INDEX IDX_3D0263AB58ABF955 ON type_logement');
        $this->addSql('ALTER TABLE type_logement DROP logement_id');
    }
}
