<?php

namespace Bonuses;

abstract class Bonus
{
    protected $speed;
    protected $health;
    protected $armor;
    protected  $damage;
    public abstract function __construct();


    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @return mixed
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

    public abstract function __toString(): string;



}