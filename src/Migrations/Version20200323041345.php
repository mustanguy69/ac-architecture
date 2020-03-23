<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200323041345 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE collectif ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cultuel ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE ehpad ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE equipement ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE individuel ADD slug VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE collectif DROP slug');
        $this->addSql('ALTER TABLE cultuel DROP slug');
        $this->addSql('ALTER TABLE ehpad DROP slug');
        $this->addSql('ALTER TABLE equipement DROP slug');
        $this->addSql('ALTER TABLE individuel DROP slug');
    }
}
