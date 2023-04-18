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
           $this->Battle();
    }

    private function Battle() : void{
        do
        {
            $squadsId = array_rand($this->squads, 2);

            $squad1Id = $squadsId[0];
            $squad2Id = $squadsId[1];



            $soldier1Id = array_rand($this->squads[$squad1Id]->getSoldiers());

            $soldier2Id = array_rand($this->squads[$squad2Id]->getSoldiers());

            $soldier1 = $this->squads[$squad1Id]->getSoldier($soldier1Id);
            $soldier2 = $this->squads[$squad2Id]->getSoldier($soldier2Id);

            if(!$soldier1->isAlive() || !$soldier1->isAlive()){
                do{
                    $soldier1Id = array_rand($this->squads[$squad1Id]->getSoldiers());

                    $soldier2Id = array_rand($this->squads[$squad2Id]->getSoldiers());

                    $soldier1 = $this->squads[$squad1Id]->getSoldier($soldier1Id);
                    $soldier2 = $this->squads[$squad2Id]->getSoldier($soldier2Id);
                }
                while($soldier1->isAlive() && $soldier2->isAlive());
            }


            $squad1name = $this->squads[$squad1Id]->getName();
            $squad2name = $this->squads[$squad2Id]->getName();

            $soldier1->takeDamage($soldier2->getDamage());
            echo "Soldier$soldier1Id from squad $squad1name attack soldier$soldier2Id from  squad $squad2name";
            echo '<br>';
            echo "Soldier$soldier2Id stats now <br>";
            echo $soldier2;
            echo "<br><br><br>";
            $soldier2->takeDamage($soldier1->getDamage());
            echo "Soldier$soldier2Id from squad $squad2name attack soldier$soldier1Id from  squad $squad1name";
            echo '<br>';
            echo "Soldier$soldier1Id stats now <br>";
            echo $soldier1;
            echo "<br>";
            echo "----------------------------------------------";
            echo "<br>";
        }
        while($this->IsHasAliveSquads());

        foreach ($this->squads as $squad) {
            if($squad->squadIsAlive()){
                echo "<h3> Squad: ".$squad->getName()." win!</h3>";
            }
        }
    }

    private function IsHasAliveSquads() : bool {
        $aliveSquads = 0;
        foreach ($this->squads as $squad) {
            if($squad->squadIsAlive()){
                $aliveSquads++;
            }
        }
        if($aliveSquads > 1)
            return true;
        return false;
    }

    public function __toString(): string
    {
        $res = "<br> Battlefield: $this->name <br>";
        $res = "<br> Weather: $this->weather <br>";
        $squadsStr  = implode("<br>", $this->squads);
        return "$res $squadsStr <br>";
    }
}