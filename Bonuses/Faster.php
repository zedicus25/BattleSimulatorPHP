<?php

namespace Bonuses;
require_once 'Bonus.php';
class Faster extends Bonus
{
    public function __construct()
    {
        $this->speed = rand(10,20);
        $this->armor = 0;
        $this->health = 0;
        $this->damage = 0;
    }



    public  function __toString(): string{
        return "Faster: $this->speed";
    }
}