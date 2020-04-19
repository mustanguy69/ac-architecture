<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200419085015 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE collectif ADD image6 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE cultuel ADD image6 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE ehpad ADD image6 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE equipement ADD image6 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE individuel ADD image6 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE collectif DROP image6');
        $this->addSql('ALTER TABLE cultuel DROP image6');
        $this->addSql('ALTER TABLE ehpad DROP image6');
        $this->addSql('ALTER TABLE equipement DROP image6');
        $this->addSql('ALTER TABLE individuel DROP image6');
    }
}
