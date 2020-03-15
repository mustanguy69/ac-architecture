<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200315011807 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE equipe ADD equipe1_name VARCHAR(255) DEFAULT NULL, ADD equipe1_role VARCHAR(255) DEFAULT NULL, ADD equipe1_role2 VARCHAR(255) DEFAULT NULL, ADD equipe2_name VARCHAR(255) DEFAULT NULL, ADD equipe2_role VARCHAR(255) DEFAULT NULL, ADD equipe2_role2 VARCHAR(255) DEFAULT NULL, ADD equipe3_name VARCHAR(255) DEFAULT NULL, ADD equipe3_role VARCHAR(255) DEFAULT NULL, ADD equipe3_role2 VARCHAR(255) DEFAULT NULL, ADD equipe4_name VARCHAR(255) DEFAULT NULL, ADD equipe4_role VARCHAR(255) DEFAULT NULL, ADD equipe4_role2 VARCHAR(255) DEFAULT NULL, ADD equipe5_name VARCHAR(255) DEFAULT NULL, ADD equipe5_role VARCHAR(255) DEFAULT NULL, ADD equipe5_role2 VARCHAR(255) DEFAULT NULL, ADD equipe6_name VARCHAR(255) DEFAULT NULL, ADD equipe6_role VARCHAR(255) DEFAULT NULL, ADD equipe6_role2 VARCHAR(255) DEFAULT NULL, ADD equipe7_name VARCHAR(255) DEFAULT NULL, ADD equipe7_role VARCHAR(255) DEFAULT NULL, ADD equipe7_role2 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE equipe DROP equipe1_name, DROP equipe1_role, DROP equipe1_role2, DROP equipe2_name, DROP equipe2_role, DROP equipe2_role2, DROP equipe3_name, DROP equipe3_role, DROP equipe3_role2, DROP equipe4_name, DROP equipe4_role, DROP equipe4_role2, DROP equipe5_name, DROP equipe5_role, DROP equipe5_role2, DROP equipe6_name, DROP equipe6_role, DROP equipe6_role2, DROP equipe7_name, DROP equipe7_role, DROP equipe7_role2');
    }
}
