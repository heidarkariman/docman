<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230421131650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE audfil (id INT AUTO_INCREMENT NOT NULL, audtyp_id INT NOT NULL, mimtyp_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, pth VARCHAR(255) NOT NULL, INDEX IDX_4B7D38B8A016079C (audtyp_id), INDEX IDX_4B7D38B8F8AE953F (mimtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE audtyp (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, maxsize INT DEFAULT NULL, maxduration INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE docfil (id INT AUTO_INCREMENT NOT NULL, doctyp_id INT NOT NULL, mimtyp_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, pth VARCHAR(255) NOT NULL, INDEX IDX_AC371E91C25D51BE (doctyp_id), INDEX IDX_AC371E91F8AE953F (mimtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doctyp (id INT AUTO_INCREMENT NOT NULL, filtyp_id INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, maxsize INT DEFAULT NULL, INDEX IDX_ED562791DC8C0056 (filtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE filtyp (id INT AUTO_INCREMENT NOT NULL, mimtyp_id INT DEFAULT NULL, filext VARCHAR(10) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_77BD636CF8AE953F (mimtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imgfil (id INT AUTO_INCREMENT NOT NULL, imgtyp_id INT NOT NULL, mimtyp_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, pth VARCHAR(255) NOT NULL, INDEX IDX_E50BC97885789587 (imgtyp_id), INDEX IDX_E50BC978F8AE953F (mimtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imgtyp (id INT AUTO_INCREMENT NOT NULL, filtyp_id INT NOT NULL, mimtyp_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, maxsize INT DEFAULT NULL, maxwidth INT DEFAULT NULL, maxheight INT DEFAULT NULL, INDEX IDX_A46AF078DC8C0056 (filtyp_id), INDEX IDX_A46AF078F8AE953F (mimtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mimtyp (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE txtfil (id INT AUTO_INCREMENT NOT NULL, txttyp_id INT NOT NULL, mimtyp_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, pth VARCHAR(255) NOT NULL, INDEX IDX_B0EF38BEBA9A89BD (txttyp_id), INDEX IDX_B0EF38BEF8AE953F (mimtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE txttyp (id INT AUTO_INCREMENT NOT NULL, filtyp_id INT NOT NULL, mimtyp_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, maxsize INT DEFAULT NULL, INDEX IDX_F18E01BEDC8C0056 (filtyp_id), INDEX IDX_F18E01BEF8AE953F (mimtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vidfil (id INT AUTO_INCREMENT NOT NULL, vidtyp_id INT NOT NULL, mimtyp_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, pth VARCHAR(255) NOT NULL, INDEX IDX_F0BE701843A30C40 (vidtyp_id), INDEX IDX_F0BE7018F8AE953F (mimtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vidtyp (id INT AUTO_INCREMENT NOT NULL, filtyp_id INT NOT NULL, mimtyp_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, maxsize INT DEFAULT NULL, maxduration INT DEFAULT NULL, maxwidth INT DEFAULT NULL, maxheight INT DEFAULT NULL, INDEX IDX_B1DF4918DC8C0056 (filtyp_id), INDEX IDX_B1DF4918F8AE953F (mimtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE audfil ADD CONSTRAINT FK_4B7D38B8A016079C FOREIGN KEY (audtyp_id) REFERENCES audtyp (id)');
        $this->addSql('ALTER TABLE audfil ADD CONSTRAINT FK_4B7D38B8F8AE953F FOREIGN KEY (mimtyp_id) REFERENCES mimtyp (id)');
        $this->addSql('ALTER TABLE docfil ADD CONSTRAINT FK_AC371E91C25D51BE FOREIGN KEY (doctyp_id) REFERENCES doctyp (id)');
        $this->addSql('ALTER TABLE docfil ADD CONSTRAINT FK_AC371E91F8AE953F FOREIGN KEY (mimtyp_id) REFERENCES mimtyp (id)');
        $this->addSql('ALTER TABLE doctyp ADD CONSTRAINT FK_ED562791DC8C0056 FOREIGN KEY (filtyp_id) REFERENCES filtyp (id)');
        $this->addSql('ALTER TABLE filtyp ADD CONSTRAINT FK_77BD636CF8AE953F FOREIGN KEY (mimtyp_id) REFERENCES mimtyp (id)');
        $this->addSql('ALTER TABLE imgfil ADD CONSTRAINT FK_E50BC97885789587 FOREIGN KEY (imgtyp_id) REFERENCES imgtyp (id)');
        $this->addSql('ALTER TABLE imgfil ADD CONSTRAINT FK_E50BC978F8AE953F FOREIGN KEY (mimtyp_id) REFERENCES mimtyp (id)');
        $this->addSql('ALTER TABLE imgtyp ADD CONSTRAINT FK_A46AF078DC8C0056 FOREIGN KEY (filtyp_id) REFERENCES filtyp (id)');
        $this->addSql('ALTER TABLE imgtyp ADD CONSTRAINT FK_A46AF078F8AE953F FOREIGN KEY (mimtyp_id) REFERENCES mimtyp (id)');
        $this->addSql('ALTER TABLE txtfil ADD CONSTRAINT FK_B0EF38BEBA9A89BD FOREIGN KEY (txttyp_id) REFERENCES txttyp (id)');
        $this->addSql('ALTER TABLE txtfil ADD CONSTRAINT FK_B0EF38BEF8AE953F FOREIGN KEY (mimtyp_id) REFERENCES mimtyp (id)');
        $this->addSql('ALTER TABLE txttyp ADD CONSTRAINT FK_F18E01BEDC8C0056 FOREIGN KEY (filtyp_id) REFERENCES filtyp (id)');
        $this->addSql('ALTER TABLE txttyp ADD CONSTRAINT FK_F18E01BEF8AE953F FOREIGN KEY (mimtyp_id) REFERENCES mimtyp (id)');
        $this->addSql('ALTER TABLE vidfil ADD CONSTRAINT FK_F0BE701843A30C40 FOREIGN KEY (vidtyp_id) REFERENCES vidtyp (id)');
        $this->addSql('ALTER TABLE vidfil ADD CONSTRAINT FK_F0BE7018F8AE953F FOREIGN KEY (mimtyp_id) REFERENCES mimtyp (id)');
        $this->addSql('ALTER TABLE vidtyp ADD CONSTRAINT FK_B1DF4918DC8C0056 FOREIGN KEY (filtyp_id) REFERENCES filtyp (id)');
        $this->addSql('ALTER TABLE vidtyp ADD CONSTRAINT FK_B1DF4918F8AE953F FOREIGN KEY (mimtyp_id) REFERENCES mimtyp (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE audfil DROP FOREIGN KEY FK_4B7D38B8A016079C');
        $this->addSql('ALTER TABLE audfil DROP FOREIGN KEY FK_4B7D38B8F8AE953F');
        $this->addSql('ALTER TABLE docfil DROP FOREIGN KEY FK_AC371E91C25D51BE');
        $this->addSql('ALTER TABLE docfil DROP FOREIGN KEY FK_AC371E91F8AE953F');
        $this->addSql('ALTER TABLE doctyp DROP FOREIGN KEY FK_ED562791DC8C0056');
        $this->addSql('ALTER TABLE filtyp DROP FOREIGN KEY FK_77BD636CF8AE953F');
        $this->addSql('ALTER TABLE imgfil DROP FOREIGN KEY FK_E50BC97885789587');
        $this->addSql('ALTER TABLE imgfil DROP FOREIGN KEY FK_E50BC978F8AE953F');
        $this->addSql('ALTER TABLE imgtyp DROP FOREIGN KEY FK_A46AF078DC8C0056');
        $this->addSql('ALTER TABLE imgtyp DROP FOREIGN KEY FK_A46AF078F8AE953F');
        $this->addSql('ALTER TABLE txtfil DROP FOREIGN KEY FK_B0EF38BEBA9A89BD');
        $this->addSql('ALTER TABLE txtfil DROP FOREIGN KEY FK_B0EF38BEF8AE953F');
        $this->addSql('ALTER TABLE txttyp DROP FOREIGN KEY FK_F18E01BEDC8C0056');
        $this->addSql('ALTER TABLE txttyp DROP FOREIGN KEY FK_F18E01BEF8AE953F');
        $this->addSql('ALTER TABLE vidfil DROP FOREIGN KEY FK_F0BE701843A30C40');
        $this->addSql('ALTER TABLE vidfil DROP FOREIGN KEY FK_F0BE7018F8AE953F');
        $this->addSql('ALTER TABLE vidtyp DROP FOREIGN KEY FK_B1DF4918DC8C0056');
        $this->addSql('ALTER TABLE vidtyp DROP FOREIGN KEY FK_B1DF4918F8AE953F');
        $this->addSql('DROP TABLE audfil');
        $this->addSql('DROP TABLE audtyp');
        $this->addSql('DROP TABLE docfil');
        $this->addSql('DROP TABLE doctyp');
        $this->addSql('DROP TABLE filtyp');
        $this->addSql('DROP TABLE imgfil');
        $this->addSql('DROP TABLE imgtyp');
        $this->addSql('DROP TABLE mimtyp');
        $this->addSql('DROP TABLE txtfil');
        $this->addSql('DROP TABLE txttyp');
        $this->addSql('DROP TABLE vidfil');
        $this->addSql('DROP TABLE vidtyp');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
