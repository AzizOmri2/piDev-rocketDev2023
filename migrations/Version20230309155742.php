<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309155742 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, pack_id INT NOT NULL, user_id INT DEFAULT NULL, date_achat DATE NOT NULL, date_fin DATE NOT NULL, etat_abonnement VARCHAR(255) NOT NULL, code_promo VARCHAR(255) DEFAULT NULL, montant_abonnement DOUBLE PRECISION NOT NULL, INDEX IDX_351268BB1919B217 (pack_id), INDEX IDX_351268BBA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, nom_activite VARCHAR(255) NOT NULL, duree_activite VARCHAR(255) NOT NULL, tenue_activite VARCHAR(255) NOT NULL, difficulte_activite VARCHAR(255) NOT NULL, image_activite VARCHAR(255) NOT NULL, description_activite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE charge (id INT AUTO_INCREMENT NOT NULL, fournisseur_id INT NOT NULL, materiel_id INT NOT NULL, quantite_charge INT NOT NULL, date_arrivage_charge DATE NOT NULL, INDEX IDX_556BA434670C757F (fournisseur_id), INDEX IDX_556BA43416880AAF (materiel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competition (id INT AUTO_INCREMENT NOT NULL, nom_competition INT NOT NULL, frais_competition DOUBLE PRECISION NOT NULL, date_competition DATE NOT NULL, nbr_max_inscrit INT NOT NULL, etat_competition VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, nom_cours VARCHAR(255) NOT NULL, prix_cours DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours_activite (cours_id INT NOT NULL, activite_id INT NOT NULL, INDEX IDX_7FE1FBC87ECF78B0 (cours_id), INDEX IDX_7FE1FBC89B0F88B1 (activite_id), PRIMARY KEY(cours_id, activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, nom_fournisseur VARCHAR(255) NOT NULL, contact_fournisseur INT NOT NULL, email_fournisseur VARCHAR(255) NOT NULL, adresse_fournisseur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiel (id INT AUTO_INCREMENT NOT NULL, nom_materiel VARCHAR(255) NOT NULL, reference_materiel VARCHAR(255) NOT NULL, date_maintenance_materiel DATE NOT NULL, quantite_materiel INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, nom_menu VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pack (id INT AUTO_INCREMENT NOT NULL, type_pack VARCHAR(255) NOT NULL, montant_pack DOUBLE PRECISION NOT NULL, duree_pack INT NOT NULL, description_pack VARCHAR(255) NOT NULL, places_pack INT NOT NULL, disponibilite_pack INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning (id INT AUTO_INCREMENT NOT NULL, date_planning DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning_cours (planning_id INT NOT NULL, cours_id INT NOT NULL, INDEX IDX_6C6636033D865311 (planning_id), INDEX IDX_6C6636037ECF78B0 (cours_id), PRIMARY KEY(planning_id, cours_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plat (id INT AUTO_INCREMENT NOT NULL, menu_id INT NOT NULL, nom_plat VARCHAR(255) NOT NULL, prix_plat DOUBLE PRECISION NOT NULL, description_plat VARCHAR(255) NOT NULL, image_plat VARCHAR(255) NOT NULL, calories_plat INT NOT NULL, etat_plat VARCHAR(255) NOT NULL, INDEX IDX_2038A207CCD7E912 (menu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, code_promotion VARCHAR(255) NOT NULL, reduction_promotion DOUBLE PRECISION NOT NULL, date_expiration DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, competition_id INT NOT NULL, description_ticket VARCHAR(255) NOT NULL, INDEX IDX_97A0ADA37B39D312 (competition_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, num_tel INT NOT NULL, date_n DATE DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB1919B217 FOREIGN KEY (pack_id) REFERENCES pack (id)');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE charge ADD CONSTRAINT FK_556BA434670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE charge ADD CONSTRAINT FK_556BA43416880AAF FOREIGN KEY (materiel_id) REFERENCES materiel (id)');
        $this->addSql('ALTER TABLE cours_activite ADD CONSTRAINT FK_7FE1FBC87ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours_activite ADD CONSTRAINT FK_7FE1FBC89B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE planning_cours ADD CONSTRAINT FK_6C6636033D865311 FOREIGN KEY (planning_id) REFERENCES planning (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE planning_cours ADD CONSTRAINT FK_6C6636037ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plat ADD CONSTRAINT FK_2038A207CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA37B39D312 FOREIGN KEY (competition_id) REFERENCES competition (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB1919B217');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BBA76ED395');
        $this->addSql('ALTER TABLE charge DROP FOREIGN KEY FK_556BA434670C757F');
        $this->addSql('ALTER TABLE charge DROP FOREIGN KEY FK_556BA43416880AAF');
        $this->addSql('ALTER TABLE cours_activite DROP FOREIGN KEY FK_7FE1FBC87ECF78B0');
        $this->addSql('ALTER TABLE cours_activite DROP FOREIGN KEY FK_7FE1FBC89B0F88B1');
        $this->addSql('ALTER TABLE planning_cours DROP FOREIGN KEY FK_6C6636033D865311');
        $this->addSql('ALTER TABLE planning_cours DROP FOREIGN KEY FK_6C6636037ECF78B0');
        $this->addSql('ALTER TABLE plat DROP FOREIGN KEY FK_2038A207CCD7E912');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA37B39D312');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE charge');
        $this->addSql('DROP TABLE competition');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE cours_activite');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE materiel');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE pack');
        $this->addSql('DROP TABLE planning');
        $this->addSql('DROP TABLE planning_cours');
        $this->addSql('DROP TABLE plat');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
