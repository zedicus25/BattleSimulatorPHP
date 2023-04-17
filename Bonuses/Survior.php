<?php
namespace Bonuses;
require_once 'Bonus.php';

class Survior extends Bonus
{
    public function __construct()
    {
        $this->speed = 0;
        $this->armor = 0;
        $this->health =  rand(50,80);
        $this->damage = 0;
    }

    public function getBonus() : float
    {
        return $this->health;
    }

    public  function __toString(): string{
        return "Survior: $this->health";
    }
}