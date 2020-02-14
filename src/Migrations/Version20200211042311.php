<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200211042311 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE presentation DROP FOREIGN KEY FK_9B66E893D44F05E5');
        $this->addSql('DROP INDEX UNIQ_9B66E893D44F05E5 ON presentation');
        $this->addSql('ALTER TABLE presentation ADD image VARCHAR(255) NOT NULL, DROP images_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE presentation ADD images_id INT DEFAULT NULL, DROP image');
        $this->addSql('ALTER TABLE presentation ADD CONSTRAINT FK_9B66E893D44F05E5 FOREIGN KEY (images_id) REFERENCES images (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9B66E893D44F05E5 ON presentation (images_id)');
    }
}
