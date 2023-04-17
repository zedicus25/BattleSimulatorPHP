<?php

namespace Fractions;

abstract class Faction
{
    protected $name;

    protected $speedBonus;
    protected $armorBonus;
    protected $healthBonus;
    protected $damageBonus;

    public function getSpeedBonus() {
            return $this->speedBonus;
    }
    public function getArmorBonus() {
        return $this->armorBonus;
    }

    public function getHealthBonus() {
        return $this->healthBonus;
    }
    public function getDamageBonus() {
        return $this->damageBonus;
    }

    public function getName() {
            return $this->name;
    }

    public function __toString(): string
    {
        return $this->name;
    }

}