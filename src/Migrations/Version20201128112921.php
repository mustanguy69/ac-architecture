<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201128112921 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE equipe ADD equipe8 VARCHAR(255) DEFAULT NULL, ADD equipe8_name VARCHAR(255) DEFAULT NULL, ADD equipe8_role VARCHAR(255) DEFAULT NULL, ADD equipe8_role2 VARCHAR(255) DEFAULT NULL, ADD equipe8_cv LONGTEXT DEFAULT NULL, ADD equipe9 VARCHAR(255) DEFAULT NULL, ADD equipe9_name VARCHAR(255) DEFAULT NULL, ADD equipe9_role VARCHAR(255) DEFAULT NULL, ADD equipe9_role2 VARCHAR(255) DEFAULT NULL, ADD equipe9_cv LONGTEXT DEFAULT NULL, ADD equipe10 VARCHAR(255) DEFAULT NULL, ADD equipe10_name VARCHAR(255) DEFAULT NULL, ADD equipe10_role VARCHAR(255) DEFAULT NULL, ADD equipe10_role2 VARCHAR(255) DEFAULT NULL, ADD equipe10_cv LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE equipe DROP equipe8, DROP equipe8_name, DROP equipe8_role, DROP equipe8_role2, DROP equipe8_cv, DROP equipe9, DROP equipe9_name, DROP equipe9_role, DROP equipe9_role2, DROP equipe9_cv, DROP equipe10, DROP equipe10_name, DROP equipe10_role, DROP equipe10_role2, DROP equipe10_cv');
       
    }
}
