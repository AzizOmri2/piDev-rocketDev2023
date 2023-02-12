<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230212193754 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B87555157ECF78B0');
        $this->addSql('DROP INDEX IDX_B87555157ECF78B0 ON activite');
        $this->addSql('ALTER TABLE activite DROP cours_id');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C3D865311');
        $this->addSql('DROP INDEX IDX_FDCA8C9C3D865311 ON cours');
        $this->addSql('ALTER TABLE cours DROP planning_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite ADD cours_id INT NOT NULL');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B87555157ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('CREATE INDEX IDX_B87555157ECF78B0 ON activite (cours_id)');
        $this->addSql('ALTER TABLE cours ADD planning_id INT NOT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C3D865311 FOREIGN KEY (planning_id) REFERENCES planning (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C3D865311 ON cours (planning_id)');
    }
}
