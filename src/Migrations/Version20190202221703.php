<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190202221703 extends AbstractMigration
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
        $this->addSql('CREATE INDEX IDX_F8E0D60EB279BE46 ON endereco (contato_id)');
        $this->addSql('ALTER TABLE contatos DROP FOREIGN KEY FK_831F6B1C1BB76823');
        $this->addSql('DROP INDEX IDX_831F6B1C1BB76823 ON contatos');
        $this->addSql('ALTER TABLE contatos DROP endereco_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contatos ADD endereco_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contatos ADD CONSTRAINT FK_831F6B1C1BB76823 FOREIGN KEY (endereco_id) REFERENCES endereco (id)');
        $this->addSql('CREATE INDEX IDX_831F6B1C1BB76823 ON contatos (endereco_id)');
        $this->addSql('ALTER TABLE endereco DROP FOREIGN KEY FK_F8E0D60EB279BE46');
        $this->addSql('DROP INDEX IDX_F8E0D60EB279BE46 ON endereco');
        $this->addSql('ALTER TABLE endereco DROP contato_id');
    }
}
