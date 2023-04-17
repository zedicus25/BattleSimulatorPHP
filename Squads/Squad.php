<?php

namespace Squads;

use Soldiers\Commander;
use Soldiers\Warior;


require_once 'Soldiers/Warior.php';
require_once 'Bonuses/Bonus.php';
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
                $warior->addArmor($bonus->getBonus());
                $warior->addSpeed($bonus->getBonus());
                $warior->addHealth($bonus->getBonus());
                $warior->addDamage($bonus->getBonus());
            }
            array_push($this->soldiers, $warior);

            $this->currentCount = $this->currentCount + 1;
        }
        else{
            echo "<br>Squad to big!<br>";
        }
    }

    public function removeSoldier($id) : void
    {
        if($this->currentCount > 0){
            unset($this->soldiers[$id]);
            $this->currentCount = $this->currentCount + 1;
        }
    }

    public function setCommander(Commander $commander): void
    {
        $this->commander = $commander;
        $this->applyBonuses();
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
                $soldier->addArmor($bonus->getBonus());
                $soldier->addSpeed($bonus->getBonus());
                $soldier->addHealth($bonus->getBonus());
                $soldier->addDamage($bonus->getBonus());
            }
        }
    }

    public function __toString(): string
    {
        $res = "Commander: <br> $this->commander <br>";
        foreach ($this->soldiers as $soldier)
        {
            $res = "$res <br> Soldier: <br> $soldier";
        }
        return $res;
    }
}