<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Get5StatsPlayersRepository")
 * @ORM\Table(name="get5_stats_players")
 */
class Get5StatsPlayers
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */

    private $matchid = '0';

    /**
     * @ORM\Column(type="smallint")
     */
    private $mapnumber;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $steamid64;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $team;

    /**
     * @ORM\Column(type="smallint")
     */
    private $roundsPlayed;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $name;

    /**
     * @ORM\Column(type="smallint")
     */
    private $kills;

    /**
     * @ORM\Column(type="smallint")
     */
    private $deaths;

    /**
     * @ORM\Column(type="smallint")
     */
    private $assists;

    /**
     * @ORM\Column(type="smallint")
     */
    private $flashbangAssists;

    /**
     * @ORM\Column(type="smallint")
     */
    private $teamkills;

    /**
     * @ORM\Column(type="smallint")
     */
    private $headshotKills;

    /**
     * @ORM\Column(type="smallint")
     */
    private $damage;

    /**
     * @ORM\Column(type="smallint")
     */
    private $bombPlants;

    /**
     * @ORM\Column(type="smallint")
     */
    private $bombDefuses;

    /**
     * @ORM\Column(type="smallint")
     */
    private $v1;

    /**
     * @ORM\Column(type="smallint")
     */
    private $v2;

    /**
     * @ORM\Column(type="smallint")
     */
    private $v3;

    /**
     * @ORM\Column(type="smallint")
     */
    private $v4;

    /**
     * @ORM\Column(type="smallint")
     */
    private $v5;

    /**
     * @ORM\Column(name="2k", type="smallint")
     */
    private $k2;

    /**
     * @ORM\Column(name="3k", type="smallint")
     */
    private $k3;

    /**
     * @ORM\Column(name="4k", type="smallint")
     */
    private $k4;

    /**
     * @ORM\Column(name="5k", type="smallint")
     */
    private $k5;

    /**
     * @ORM\Column(type="smallint")
     */
    private $firstkillT;

    /**
     * @ORM\Column(type="smallint")
     */
    private $firstkillCt;

    /**
     * @ORM\Column(type="smallint")
     */
    private $firstdeathT;

    /**
     * @ORM\Column(type="smallint")
     */
    private $firstdeathCt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatchid(): ?int
    {
        return $this->matchid;
    }

    public function setMatchid(int $matchid): self
    {
        $this->matchid = $matchid;

        return $this;
    }

    public function getMapnumber(): ?int
    {
        return $this->mapnumber;
    }

    public function setMapnumber(int $mapnumber): self
    {
        $this->mapnumber = $mapnumber;

        return $this;
    }

    public function getSteamid64(): ?string
    {
        return $this->steamid64;
    }

    public function setSteamid64(string $steamid64): self
    {
        $this->steamid64 = $steamid64;

        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(string $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getRoundsPlayed(): ?int
    {
        return $this->roundsPlayed;
    }

    public function setRoundsPlayed(int $roundsPlayed): self
    {
        $this->roundsPlayed = $roundsPlayed;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getKills(): ?int
    {
        return $this->kills;
    }

    public function setKills(int $kills): self
    {
        $this->kills = $kills;

        return $this;
    }

    public function getDeaths(): ?int
    {
        return $this->deaths;
    }

    public function setDeaths(int $deaths): self
    {
        $this->deaths = $deaths;

        return $this;
    }

    public function getAssists(): ?int
    {
        return $this->assists;
    }

    public function setAssists(int $assists): self
    {
        $this->assists = $assists;

        return $this;
    }

    public function getFlashbangAssists(): ?int
    {
        return $this->flashbangAssists;
    }

    public function setFlashbangAssists(int $flashbangAssists): self
    {
        $this->flashbangAssists = $flashbangAssists;

        return $this;
    }

    public function getTeamkills(): ?int
    {
        return $this->teamkills;
    }

    public function setTeamkills(int $teamkills): self
    {
        $this->teamkills = $teamkills;

        return $this;
    }

    public function getHeadshotKills(): ?int
    {
        return $this->headshotKills;
    }

    public function setHeadshotKills(int $headshotKills): self
    {
        $this->headshotKills = $headshotKills;

        return $this;
    }

    public function getDamage(): ?int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): self
    {
        $this->damage = $damage;

        return $this;
    }

    public function getBombPlants(): ?int
    {
        return $this->bombPlants;
    }

    public function setBombPlants(int $bombPlants): self
    {
        $this->bombPlants = $bombPlants;

        return $this;
    }

    public function getBombDefuses(): ?int
    {
        return $this->bombDefuses;
    }

    public function setBombDefuses(int $bombDefuses): self
    {
        $this->bombDefuses = $bombDefuses;

        return $this;
    }

    public function getV1(): ?int
    {
        return $this->v1;
    }

    public function setV1(int $v1): self
    {
        $this->v1 = $v1;

        return $this;
    }

    public function getV2(): ?int
    {
        return $this->v2;
    }

    public function setV2(int $v2): self
    {
        $this->v2 = $v2;

        return $this;
    }

    public function getV3(): ?int
    {
        return $this->v3;
    }

    public function setV3(int $v3): self
    {
        $this->v3 = $v3;

        return $this;
    }

    public function getV4(): ?int
    {
        return $this->v4;
    }

    public function setV4(int $v4): self
    {
        $this->v4 = $v4;

        return $this;
    }

    public function getV5(): ?int
    {
        return $this->v5;
    }

    public function setV5(int $v5): self
    {
        $this->v5 = $v5;

        return $this;
    }

    public function getK2(): ?int
    {
        return $this->k2;
    }

    public function setK2(int $k2): self
    {
        $this->k2 = $k2;

        return $this;
    }

    public function getK3(): ?int
    {
        return $this->k3;
    }

    public function setK3(int $k3): self
    {
        $this->k3 = $k3;

        return $this;
    }

    public function getK4(): ?int
    {
        return $this->k4;
    }

    public function setK4(int $k4): self
    {
        $this->k4 = $k4;

        return $this;
    }

    public function getK5(): ?int
    {
        return $this->k5;
    }

    public function setK5(int $k5): self
    {
        $this->k5 = $k5;

        return $this;
    }

    public function getFirstkillT(): ?int
    {
        return $this->firstkillT;
    }

    public function setFirstkillT(int $firstkillT): self
    {
        $this->firstkillT = $firstkillT;

        return $this;
    }

    public function getFirstkillCt(): ?int
    {
        return $this->firstkillCt;
    }

    public function setFirstkillCt(int $firstkillCt): self
    {
        $this->firstkillCt = $firstkillCt;

        return $this;
    }

    public function getFirstdeathT(): ?int
    {
        return $this->firstdeathT;
    }

    public function setFirstdeathT(int $firstdeathT): self
    {
        $this->firstdeathT = $firstdeathT;

        return $this;
    }

    public function getFirstdeathCt(): ?int
    {
        return $this->firstdeathCt;
    }


    public function setFirstdeathCt(int $firstdeathCt): self
    {
        $this->firstdeathCt = $firstdeathCt;

        return $this;
    }
}
