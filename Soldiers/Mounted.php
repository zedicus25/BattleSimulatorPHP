<?php

namespace Soldiers;

use Armors\LightArmors\LeatherArmor;
use Horses\Horse;
use Weapons\OneHands\Sword;

require_once 'Armors/LightArmors/LeatherArmor.php';
require_once 'Horses/Horse.php';
require_once 'Weapons/Weapon.php';
require_once 'Weapons/OneHands/Sword.php';
class Mounted extends Warior
{
    protected $horse;

    public function __construct()
    {
        $this->armor = new LeatherArmor();
        $this->weapon = new Sword();
        $this->horse = new Horse();

        $this->health = rand(100,120);
        $this->health = $this->health + $this->armor->getArmor();

        $this->damage = rand(1,5);
        $this->damage = $this->damage + $this->weapon->getDamage();
        $this->damage = $this->damage * $this->speed;

        $this->speed = rand(25,35);
        $this->speed = $this->speed - $this->armor->getSpeed() + $this->horse->getSpeed();
    }

    public  function __toString(): string
    {
        return "Speed: $this->speed <br> Health: $this->health <br> Damage: $this->damage <br> <br> Horse:<br>  $this->horse";
    }
}