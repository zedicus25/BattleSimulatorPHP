<?php

namespace Bonuses;
require_once 'Bonus.php';
class Berserk extends Bonus
{
    public function __construct()
    {
        $this->speed = 0;
        $this->armor = 0;
        $this->health = 0;
        $this->damage = rand(50,80);
    }



    public  function __toString(): string{
        return "Berserk: $this->damage";
    }
}