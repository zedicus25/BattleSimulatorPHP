<?php

namespace Soldiers;

use Armors\Armor;
use Armors\LightArmors\LeatherArmor;
use Fractions\Faction;
use Fractions\SacredFaction;
use Weapons\OneHands\Sword;
use Weapons\Weapon;

require_once 'Armors/Armor.php';
require_once 'Armors/LightArmors/LeatherArmor.php';
require_once 'Weapons/OneHands/Sword.php';
require_once 'Weapons/Weapon.php';
require_once 'Fractions/SacredFaction.php';

abstract class Warior
{
    protected $health;
    protected $armor;
    protected $facion;
    protected $weapon;
    protected $speed;
    protected $damage;

    public function __construct(Faction $facion = null)
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

        if($facion == null)
            $this->facion = new SacredFaction();
        else
            $this->facion = $facion;

        $this->addArmor($this->facion->getArmorBonus());
        $this->addSpeed($this->facion->getSpeedBonus());
        $this->addHealth($this->facion->getHealthBonus());
        $this->addDamage($this->facion->getDamageBonus());
    }


    public function takeDamage($damege){
        if($this->isAlive())
            $this->health = $this->health - $this->damage;
        else
            $this->health = 0;
    }

    /**
     * @return Armor
     */
    public function getArmor(): Armor
    {
        return $this->armor;
    }

    /**
     * @return bool
     */
    public function isAlive(): bool
    {
        return $this->health > 0;
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


    public function addArmor(int $armor): void
    {
        $this->armor = $this->health + $armor;
    }

    /**
     * @param int $speed
     */
    public function addSpeed(int $speed): void
    {
        $this->speed = $this->speed + $speed;
    }

    /**
     * @param int $health
     */
    public function addHealth(int $health): void
    {
        $this->health = $this->health + $health;
    }

    /**
     * @param float|int $damage
     */
    public function addDamage(float|int $damage): void
    {
        $this->damage = $this->damage + $damage;
    }

    public abstract function  __toString(): string;

}
?>