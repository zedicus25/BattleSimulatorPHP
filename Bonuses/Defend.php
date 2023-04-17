<?php

namespace Bonuses;
require_once 'Bonus.php';
class Defend extends Bonus
{
    public function __construct()
    {
        $this->speed = 0;
        $this->armor = rand(50,80);
        $this->health = 0;
        $this->damage = 0;
    }

    public function getBonus() : float
    {
        return $this->armor;
    }

    public  function __toString(): string{
        return "Defend: $this->armor";
    }
}