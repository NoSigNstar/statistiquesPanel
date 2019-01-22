<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190122192349 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE get5stats_matches (matchid INT AUTO_INCREMENT NOT NULL, mapnumber SMALLINT NOT NULL, start_time DATETIME NOT NULL, end_time DATETIME DEFAULT NULL, winner VARCHAR(16) NOT NULL, mapname VARCHAR(64) NOT NULL, team1score SMALLINT NOT NULL, team2score SMALLINT NOT NULL, PRIMARY KEY(matchid)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE get5stats_players (matchid INT AUTO_INCREMENT NOT NULL, mapnumber SMALLINT NOT NULL, steamid64 VARCHAR(32) NOT NULL, team VARCHAR(16) NOT NULL, rounds_played SMALLINT NOT NULL, name VARCHAR(64) NOT NULL, kills SMALLINT NOT NULL, deaths SMALLINT NOT NULL, assists SMALLINT NOT NULL, flashbang_assists SMALLINT NOT NULL, teamkills SMALLINT NOT NULL, headshot_kills SMALLINT NOT NULL, damage SMALLINT NOT NULL, bomb_plants SMALLINT NOT NULL, bomb_defuses SMALLINT NOT NULL, v1 SMALLINT NOT NULL, v2 SMALLINT NOT NULL, v3 SMALLINT NOT NULL, v4 SMALLINT NOT NULL, v5 SMALLINT NOT NULL, k2 SMALLINT NOT NULL, k3 SMALLINT NOT NULL, k4 SMALLINT NOT NULL, k5 SMALLINT NOT NULL, firstkill_t SMALLINT NOT NULL, firstkill_ct SMALLINT NOT NULL, firstdeath_ct SMALLINT NOT NULL, PRIMARY KEY(matchid)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE get5stats_maps (matchid INT AUTO_INCREMENT NOT NULL, mapnumber SMALLINT NOT NULL, start_time DATETIME NOT NULL, end_time DATETIME DEFAULT NULL, winner VARCHAR(16) NOT NULL, team1score SMALLINT NOT NULL, team2score SMALLINT NOT NULL, PRIMARY KEY(matchid)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE get5stats_matches');
        $this->addSql('DROP TABLE get5stats_players');
        $this->addSql('DROP TABLE get5stats_maps');
    }
}
