<?php

namespace Armors;

abstract class Armor
{
    protected $armor;
    protected $speed;
    public function __construct()
    {
        $this->armor = rand(10,20);
        $this->speed = rand(5,10);
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getArmor(): int
    {
        return $this->armor;
    }

    /**
     * @param int $armor
     */
    public function setArmor(int $armor): void
    {
        $this->armor = $armor;
    }
}