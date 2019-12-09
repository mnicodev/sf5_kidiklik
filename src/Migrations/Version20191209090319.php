<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191209090319 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agenda (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, resume VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, video VARCHAR(255) DEFAULT NULL, map VARCHAR(255) DEFAULT NULL, lieu VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, horaires VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, age_min VARCHAR(255) NOT NULL, age_max VARCHAR(255) NOT NULL, active TINYINT(1) DEFAULT NULL, type_resa INT DEFAULT NULL, reservation VARCHAR(255) DEFAULT NULL, lat DOUBLE PRECISION DEFAULT NULL, lng DOUBLE PRECISION DEFAULT NULL, dept INT DEFAULT NULL, created DATETIME NOT NULL, modified DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agenda_dates (id INT AUTO_INCREMENT NOT NULL, agenda_id INT DEFAULT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, INDEX IDX_FB4C9D80EA67784A (agenda_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, resume VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, video VARCHAR(255) DEFAULT NULL, map VARCHAR(255) DEFAULT NULL, lieu VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, age_min VARCHAR(255) NOT NULL, age_max VARCHAR(255) NOT NULL, tarifs VARCHAR(255) DEFAULT NULL, horaires VARCHAR(255) DEFAULT NULL, duree VARCHAR(255) DEFAULT NULL, info_sup VARCHAR(255) DEFAULT NULL, service VARCHAR(255) DEFAULT NULL, type_resa INT DEFAULT NULL, reservation VARCHAR(255) DEFAULT NULL, lat DOUBLE PRECISION DEFAULT NULL, lng DOUBLE PRECISION DEFAULT NULL, created DATETIME NOT NULL, modified DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agenda_dates ADD CONSTRAINT FK_FB4C9D80EA67784A FOREIGN KEY (agenda_id) REFERENCES agenda (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE agenda_dates DROP FOREIGN KEY FK_FB4C9D80EA67784A');
        $this->addSql('DROP TABLE agenda');
        $this->addSql('DROP TABLE agenda_dates');
        $this->addSql('DROP TABLE activite');
    }
}
