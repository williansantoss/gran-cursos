<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190202204407 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE endereco ADD contato_id INT NOT NULL');
        $this->addSql('ALTER TABLE endereco ADD CONSTRAINT FK_F8E0D60EB279BE46 FOREIGN KEY (contato_id) REFERENCES contatos (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F8E0D60EB279BE46 ON endereco (contato_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE endereco DROP FOREIGN KEY FK_F8E0D60EB279BE46');
        $this->addSql('DROP INDEX UNIQ_F8E0D60EB279BE46 ON endereco');
        $this->addSql('ALTER TABLE endereco DROP contato_id');
    }
}
