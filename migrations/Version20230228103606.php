<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230228103606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, num_tel INT NOT NULL, date_n DATE DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `like` ADD plat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B3D73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id)');
        $this->addSql('CREATE INDEX IDX_AC6340B3D73DB560 ON `like` (plat_id)');
        $this->addSql('ALTER TABLE reservation DROP INDEX FK_42C84955839E70E, ADD UNIQUE INDEX UNIQ_42C84955839E70E (idplat_id)');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY fk_reservation_plat');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955839E70E');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955839E70E FOREIGN KEY (idplat_id) REFERENCES plat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B3D73DB560');
        $this->addSql('DROP INDEX IDX_AC6340B3D73DB560 ON `like`');
        $this->addSql('ALTER TABLE `like` DROP plat_id');
        $this->addSql('ALTER TABLE reservation DROP INDEX UNIQ_42C84955839E70E, ADD INDEX FK_42C84955839E70E (idplat_id)');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955839E70E');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT fk_reservation_plat FOREIGN KEY (idplat_id) REFERENCES plat (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955839E70E FOREIGN KEY (idplat_id) REFERENCES plat (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
