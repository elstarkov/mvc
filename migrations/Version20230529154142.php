<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230529154142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__overcrowding AS SELECT id, year, gender, category, amount FROM overcrowding');
        $this->addSql('DROP TABLE overcrowding');
        $this->addSql('CREATE TABLE overcrowding (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year VARCHAR(255) DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, category VARCHAR(255) DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL)');
        $this->addSql('INSERT INTO overcrowding (id, year, gender, category, amount) SELECT id, year, gender, category, amount FROM __temp__overcrowding');
        $this->addSql('DROP TABLE __temp__overcrowding');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__overcrowding AS SELECT id, year, gender, category, amount FROM overcrowding');
        $this->addSql('DROP TABLE overcrowding');
        $this->addSql('CREATE TABLE overcrowding (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year VARCHAR(255) DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, category VARCHAR(255) DEFAULT NULL, amount INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO overcrowding (id, year, gender, category, amount) SELECT id, year, gender, category, amount FROM __temp__overcrowding');
        $this->addSql('DROP TABLE __temp__overcrowding');
    }
}
