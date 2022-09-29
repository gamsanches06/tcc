<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220929002110 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, is_active TINYINT(1) NOT NULL, balance VARCHAR(255) NOT NULL, age VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE data_spring');
        $this->addSql('DROP TABLE data_node');
        $this->addSql('DROP TABLE data_symfony');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE data_spring (isActive VARCHAR(6) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, balance VARCHAR(25) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, age INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, gender VARCHAR(6) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, company VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, phone VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, address VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE data_node (isActive VARCHAR(6) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, balance VARCHAR(25) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, age INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, gender VARCHAR(6) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, company VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, phone VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, address VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE data_symfony (isActive VARCHAR(6) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, balance VARCHAR(25) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, age INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, gender VARCHAR(6) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, company VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, phone VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, address VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE users');
    }
}
