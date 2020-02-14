<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200214042450 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE equipe ADD equipe1_cv LONGTEXT DEFAULT NULL, ADD equipe2_cv LONGTEXT DEFAULT NULL, ADD equipe3_cv LONGTEXT DEFAULT NULL, ADD equipe4_cv LONGTEXT DEFAULT NULL, ADD equipe5_cv LONGTEXT DEFAULT NULL, ADD equipe6_cv LONGTEXT DEFAULT NULL, ADD equipe7_cv LONGTEXT DEFAULT NULL, CHANGE content_html content_html LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE equipe DROP equipe1_cv, DROP equipe2_cv, DROP equipe3_cv, DROP equipe4_cv, DROP equipe5_cv, DROP equipe6_cv, DROP equipe7_cv, CHANGE content_html content_html VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
