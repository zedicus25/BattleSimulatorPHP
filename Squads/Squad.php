<?php

namespace Squads;

use Soldiers\Commander;
use Soldiers\Warior;
use Weathers\Weather;


require_once 'Soldiers/Warior.php';
require_once 'Bonuses/Bonus.php';
require_once 'Weathers/Weather.php';
class Squad
{
     private const  MIN_SOLDIERS = 5;
     private const MAX_SOLDIERS = 25;

     private $name;

     private $currentCount;
     private $soldiers;

     private $commander;

     public function __construct($name)
     {
         $this->name = $name;
         $this->currentCount = 0;
         $this->soldiers = array();
     }

    public function addSoldier(Warior $warior): void
    {
        if($this->currentCount < (self::MAX_SOLDIERS-1)){

            foreach ($this->commander->getBonuses() as $bonus) {
                $warior->addArmor($bonus->getArmor());
                $warior->addSpeed($bonus->getSpeed());
                $warior->addHealth($bonus->getHealth());
                $warior->addDamage($bonus->getDamage());
            }
            array_push($this->soldiers, $warior);

            $this->currentCount = $this->currentCount + 1;
        }
        else{
            echo "<br>Squad to big!<br>";
        }
    }

    /**
     * @return array
     */
    public function getSoldiers(): array
    {
        return $this->soldiers;
    }

    public function getSoldier($id) : Warior{
         return $this->soldiers[$id];
    }

    public function removeSoldier($id) : void
    {
        if($this->currentCount > 0){
            unset($this->soldiers[$id]);
            $this->currentCount = $this->currentCount + 1;
        }
    }

    public function squadIsAlive() : bool{
        foreach ($this->soldiers as $soldier) {
            if($soldier->isAlive())
                return true;
        }
        return false;
    }

    public function setCommander(Commander $commander): void
    {
        $this->commander = $commander;
        $this->applyBonuses();
    }

    public function applyWeatherEffect(Weather $weather) : void {
        foreach ($this->soldiers as $soldier) {
                $soldier->addSpeed($weather->getSpeed());
        }
    }

    /**
     * @return mixed
     */
    public function getCommander()
    {
        return $this->commander;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    private function applyBonuses() : void {
        foreach ($this->soldiers as $soldier) {
            foreach ($this->commander->getBonuses() as $bonus) {
                $soldier->addArmor($bonus->getArmor());
                $soldier->addSpeed($bonus->getSpeed());
                $soldier->addHealth($bonus->getHealth());
                $soldier->addDamage($bonus->getDamage());
            }
        }
    }

    public function __toString(): string
    {
        $res = "Squad name: <br> $this->name <br> <br>";
        $res = "$res Commander: <br> $this->commander <br>";
        foreach ($this->soldiers as $soldier)
        {
            $res = "$res <br> Soldier: <br> $soldier";
        }
        return $res;
    }
}