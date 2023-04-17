<?php

namespace Soldiers;

use Armors\Armor;
use Armors\LightArmors\LeatherArmor;
use Weapons\OneHands\Sword;
use Weapons\Weapon;

require_once 'Armors/Armor.php';
require_once 'Armors/LightArmors/LeatherArmor.php';
require_once 'Weapons/OneHands/Sword.php';
require_once 'Weapons/Weapon.php';

abstract class Warior
{
    protected $health;
    protected $armor;
    protected $weapon;
    protected $speed;
    protected $damage;

    public function __construct()
    {
        $this->armor = new LeatherArmor();
        $this->weapon = new Sword();

        $this->health = rand(1000,1200);
        $this->health = $this->health + $this->armor->getArmor();

        $this->speed = rand(25,35);
        $this->speed = $this->speed - $this->armor->getSpeed();

        $this->damage = rand(1,5);
        $this->damage = $this->damage + $this->weapon->getDamage();
        $this->damage = $this->damage * $this->speed;
    }

    /**
     * @return Armor
     */
    public function getArmor(): Armor
    {
        return $this->armor;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @return float|int
     */
    public function getDamage(): float|int
    {
        return $this->damage;
    }

    /**
     * @return Weapon
     */
    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    /**
     * @param Armor $armor
     */
    public function setArmor(Armor $armor): void
    {
        $this->armor = $armor;
    }

    /**
     * @param Weapon $weapon
     */
    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @param int $health
     */
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    /**
     * @param float|int $damage
     */
    public function setDamage(float|int $damage): void
    {
        $this->damage = $damage;
    }
}
?>