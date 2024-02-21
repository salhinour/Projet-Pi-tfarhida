<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219190631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plat ADD id INT AUTO_INCREMENT NOT NULL, DROP id_plat, CHANGE nom nom VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plat MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON plat');
        $this->addSql('ALTER TABLE plat ADD id_plat INT NOT NULL, DROP id, CHANGE nom nom VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE plat ADD PRIMARY KEY (id_plat)');
    }
}
