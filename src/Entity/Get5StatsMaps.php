<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Get5StatsMapsRepository")
 * @ORM\Table(name="get5_stats_maps")
 */
class Get5StatsMaps
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $matchid;

    /**
     * @ORM\Column(type="smallint")
     */
    private $mapnumber;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startTime;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $winner;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $mapname;

    /**
     * @ORM\Column(name="team1_score", type="smallint")
     */
    private $team1Score;

    /**
     * @ORM\Column(name="team2_score",type="smallint")
     */
    private $team2Score;

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

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(?\DateTimeInterface $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }

    public function getWinner(): ?string
    {
        return $this->winner;
    }

    public function setWinner(string $winner): self
    {
        $this->winner = $winner;

        return $this;
    }

    public function getMapname(): ?string
    {
        return $this->mapname;
    }

    public function setMapname(string $mapname): self
    {
        $this->mapname = $mapname;

        return $this;
    }

    public function getTeam1Score(): ?int
    {
        return $this->team1Score;
    }

    public function setTeam1Score(int $team1Score): self
    {
        $this->team1Score = $team1Score;

        return $this;
    }

    public function getTeam2Score(): ?int
    {
        return $this->team2Score;
    }

    public function setTeam2Score(int $team2Score): self
    {
        $this->team2Score = $team2Score;

        return $this;
    }
}
