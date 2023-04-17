<?php

namespace Weapons\TwoHands;
require_once 'Weapons\Weapon.php';
class Peak extends \Weapons\Weapon
{
    public function __construct()
    {
        $this->damage = rand(15,25);
        $this->speed = rand(10,15);
    }
}