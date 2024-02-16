<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240213172555 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trajet ADD moyen_transport_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trajet ADD CONSTRAINT FK_2B5BA98C3ED8D53F FOREIGN KEY (moyen_transport_id) REFERENCES moyen_transport (id)');
        $this->addSql('CREATE INDEX IDX_2B5BA98C3ED8D53F ON trajet (moyen_transport_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trajet DROP FOREIGN KEY FK_2B5BA98C3ED8D53F');
        $this->addSql('DROP INDEX IDX_2B5BA98C3ED8D53F ON trajet');
        $this->addSql('ALTER TABLE trajet DROP moyen_transport_id');
    }
}
