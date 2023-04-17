<?php

namespace Weapons;

abstract class Weapon
{
    protected $damage;
    protected $speed;

    public function __construct()
    {
        $this->damage = rand(10,20);
        $this->speed = rand(5,10);
    }

    /**
     * @param int $damage
     */
    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }
}