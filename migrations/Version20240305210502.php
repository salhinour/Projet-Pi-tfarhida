<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240305210502 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activitee ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activitee ADD CONSTRAINT FK_82BFEBE4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_82BFEBE4A76ED395 ON activitee (user_id)');
        $this->addSql('ALTER TABLE logement ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE logement ADD CONSTRAINT FK_F0FD4457A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F0FD4457A76ED395 ON logement (user_id)');
        $this->addSql('ALTER TABLE moyen_transport ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE moyen_transport ADD CONSTRAINT FK_F42537D8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F42537D8A76ED395 ON moyen_transport (user_id)');
        $this->addSql('ALTER TABLE reclamation ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CE606404A76ED395 ON reclamation (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activitee DROP FOREIGN KEY FK_82BFEBE4A76ED395');
        $this->addSql('DROP INDEX IDX_82BFEBE4A76ED395 ON activitee');
        $this->addSql('ALTER TABLE activitee DROP user_id');
        $this->addSql('ALTER TABLE logement DROP FOREIGN KEY FK_F0FD4457A76ED395');
        $this->addSql('DROP INDEX IDX_F0FD4457A76ED395 ON logement');
        $this->addSql('ALTER TABLE logement DROP user_id');
        $this->addSql('ALTER TABLE moyen_transport DROP FOREIGN KEY FK_F42537D8A76ED395');
        $this->addSql('DROP INDEX IDX_F42537D8A76ED395 ON moyen_transport');
        $this->addSql('ALTER TABLE moyen_transport DROP user_id');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404A76ED395');
        $this->addSql('DROP INDEX IDX_CE606404A76ED395 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP user_id');
    }
}
