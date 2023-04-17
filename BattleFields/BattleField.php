<?php

namespace BattleFields;

use Squads\Squad;
use Weathers\Weather;
require_once 'Weathers/Weather.php';
require_once "Squads/Squad.php";
class BattleField
{
    private const MIN_SQUADS = 2;

    private $name;

    private $weather;
    private $squads;
    private $currentSquadCount;
    public function __construct($name, Weather $weather)
    {
        $this->name = $name;
        $this->weather = $weather;
        $this->currentSquadCount = 0;
        $this->squads = array();
    }

    public function addSquad(Squad $squad) : void {
        $squad->applyWeatherEffect($this->weather);
        array_push($this->squads,$squad);
        $this->currentSquadCount++;

    }

    public function startBattle() : void {
        if ($this->currentSquadCount < self::MIN_SQUADS)
            echo "Add more squads!";
        else
            echo "Battle";
    }

    public function __toString(): string
    {
        $res = "<br> Battlefield: $this->name <br>";
        $res = "<br> Weather: $this->weather <br>";
        $squadsStr  = implode("<br>", $this->squads);
        return "$res $squadsStr <br>";
    }
}