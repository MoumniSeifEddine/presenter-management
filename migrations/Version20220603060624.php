<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220603060624 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE numero (id INT AUTO_INCREMENT NOT NULL, presentateur_id INT NOT NULL, titre VARCHAR(255) NOT NULL, duree TIME NOT NULL, INDEX IDX_F55AE19EEC3FD9F4 (presentateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE presentateur (id INT AUTO_INCREMENT NOT NULL, role_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_3650B763D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE numero ADD CONSTRAINT FK_F55AE19EEC3FD9F4 FOREIGN KEY (presentateur_id) REFERENCES presentateur (id)');
        $this->addSql('ALTER TABLE presentateur ADD CONSTRAINT FK_3650B763D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE numero DROP FOREIGN KEY FK_F55AE19EEC3FD9F4');
        $this->addSql('ALTER TABLE presentateur DROP FOREIGN KEY FK_3650B763D60322AC');
        $this->addSql('DROP TABLE numero');
        $this->addSql('DROP TABLE presentateur');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE user');
    }
}
