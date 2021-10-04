<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211004101450 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE companies (id INT AUTO_INCREMENT NOT NULL, c_name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pda (id INT AUTO_INCREMENT NOT NULL, p_company_id INT DEFAULT NULL, p_no_sim_id INT DEFAULT NULL, p_imei VARCHAR(20) NOT NULL, p_no_serial VARCHAR(15) NOT NULL, p_no_pda INT NOT NULL, p_firstname VARCHAR(50) NOT NULL, p_lastname VARCHAR(50) NOT NULL, p_type VARCHAR(10) NOT NULL, p_problem LONGTEXT NOT NULL, INDEX IDX_90944E2FC0C81CD9 (p_company_id), INDEX IDX_90944E2FDC95160A (p_no_sim_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sim (id INT AUTO_INCREMENT NOT NULL, s_no_phone VARCHAR(20) NOT NULL, s_no_sim VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pda ADD CONSTRAINT FK_90944E2FC0C81CD9 FOREIGN KEY (p_company_id) REFERENCES companies (id)');
        $this->addSql('ALTER TABLE pda ADD CONSTRAINT FK_90944E2FDC95160A FOREIGN KEY (p_no_sim_id) REFERENCES sim (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pda DROP FOREIGN KEY FK_90944E2FC0C81CD9');
        $this->addSql('ALTER TABLE pda DROP FOREIGN KEY FK_90944E2FDC95160A');
        $this->addSql('DROP TABLE companies');
        $this->addSql('DROP TABLE pda');
        $this->addSql('DROP TABLE sim');
    }
}
