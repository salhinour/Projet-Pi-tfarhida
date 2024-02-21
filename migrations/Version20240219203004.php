<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219203004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE plats_restaurants (plat_id INT NOT NULL, restaurant_id INT NOT NULL, INDEX IDX_B4EBD02BD73DB560 (plat_id), INDEX IDX_B4EBD02BB1E7706E (restaurant_id), PRIMARY KEY(plat_id, restaurant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE plats_restaurants ADD CONSTRAINT FK_B4EBD02BD73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plats_restaurants ADD CONSTRAINT FK_B4EBD02BB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plats_restaurants DROP FOREIGN KEY FK_B4EBD02BD73DB560');
        $this->addSql('ALTER TABLE plats_restaurants DROP FOREIGN KEY FK_B4EBD02BB1E7706E');
        $this->addSql('DROP TABLE plats_restaurants');
    }
}
