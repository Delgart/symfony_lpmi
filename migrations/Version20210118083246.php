<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210118083246 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'creation des entites cake et ingredient';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cake (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, cake VARCHAR(255) NOT NULL, is_sweet BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE ingredients (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, ingredients VARCHAR(255) NOT NULL, allergen BOOLEAN NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cake');
        $this->addSql('DROP TABLE ingredients');
    }
}
