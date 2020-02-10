<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200209130213 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE portable (id INT AUTO_INCREMENT NOT NULL, marque VARCHAR(255) NOT NULL, diagonale VARCHAR(255) NOT NULL, chipset VARCHAR(255) NOT NULL, processeur VARCHAR(255) NOT NULL, ram VARCHAR(255) NOT NULL, prix VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, stockage VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gamer (id INT AUTO_INCREMENT NOT NULL, marque VARCHAR(255) NOT NULL, diagonale VARCHAR(255) NOT NULL, chipset VARCHAR(255) NOT NULL, processeur VARCHAR(255) NOT NULL, ram VARCHAR(255) NOT NULL, prix VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, stockage VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE macbook (id INT AUTO_INCREMENT NOT NULL, marque VARCHAR(255) NOT NULL, diagonale VARCHAR(255) NOT NULL, chipset VARCHAR(255) NOT NULL, processeur VARCHAR(255) NOT NULL, ram VARCHAR(255) NOT NULL, prix VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, stockage VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chromebook (id INT AUTO_INCREMENT NOT NULL, marque VARCHAR(255) NOT NULL, diagonale VARCHAR(255) NOT NULL, chipset VARCHAR(255) NOT NULL, processeur VARCHAR(255) NOT NULL, ram VARCHAR(255) NOT NULL, prix VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, stockage VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE portable');
        $this->addSql('DROP TABLE gamer');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE macbook');
        $this->addSql('DROP TABLE chromebook');
    }
}
