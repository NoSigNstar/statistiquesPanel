<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Get5StatsMatchesRepository")
 * @ORM\Table(name="get5_stats_matches")
 */
class Get5StatsMatches
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    
    private $matchid;

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
    private $seriesType;

    /**
     * @ORM\Column(name="team1_name", type="string", length=64)
     */
    private $team1Name;

    /**
     * @ORM\Column(name="team1_score", type="smallint")
     */
    private $team1Score;

    /**
     * @ORM\Column(name="team2_name", type="string", length=64)
     */
    private $team2Name;

    /**
     * @ORM\Column(name="team2_score", type="smallint")
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

    public function getSeriesType(): ?string
    {
        return $this->seriesType;
    }

    public function setSeriesType(string $seriesType): self
    {
        $this->seriesType = $seriesType;

        return $this;
    }

    public function getTeam1Name(): ?string
    {
        return $this->team1Name;
    }

    public function setTeam1Name(string $team1Name): self
    {
        $this->team1Name = $team1Name;

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

    public function getTeam2Name(): ?string
    {
        return $this->team2Name;
    }

    public function setTeam2Name(string $team2Name): self
    {
        $this->team2Name = $team2Name;

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
