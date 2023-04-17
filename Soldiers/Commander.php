<?php

namespace Soldiers;

use Armors\MediumArmors\ChainMail;

use Bonuses\Bonus;

use Bonuses\Defend;
use Bonuses\Faster;
use Weapons\OneHands\Saber;


require_once 'Soldiers/Warior.php';
require_once 'Armors/MediumArmors/ChainMail.php';
require_once 'Weapons/OneHands/Saber.php';
require_once 'Bonuses/Bonus.php';

class Commander extends Warior
{
    private const MAX_BONUSES = 3;
    private $bonuses;
    private $bonusesCount;
    public function __construct()
    {
        $this->armor = new ChainMail();
        $this->weapon = new Saber();

        $this->health = rand(1000,1200);
        $this->health = $this->health + $this->armor->getArmor();

        $this->speed = rand(25,35);
        $this->speed = $this->speed - $this->armor->getSpeed();

        $this->damage = rand(1,5);
        $this->damage = $this->damage + $this->weapon->getDamage();
        $this->damage = $this->damage * $this->speed;

        $this->bonusesCount = 0;
        $this->bonuses = array();
    }

    public function addBonus(Bonus $bonus): void
    {
        if($this->bonusesCount < (self::MAX_BONUSES)){
            array_push($this->bonuses, $bonus);
            $this->bonusesCount = $this->bonusesCount + 1;
        }
    }

    /**
     * @return array
     */
    public function getBonuses(): array
    {
        return $this->bonuses;
    }

    public  function __toString(): string
    {
        $bonusesStr  = implode("<br>", $this->bonuses);
        return "Speed: $this->speed <br> Health: $this->health <br> Damage: $this->damage <br> <br> Bonuses:<br>  $bonusesStr";
    }


}