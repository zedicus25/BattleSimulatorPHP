<?php

namespace Armors\HeavyArmors;

use Armors\Armor;
require_once 'Armors/Armor.php';
abstract class HeavyArmor extends Armor
{
    public function __construct()
    {
        $this->armor = rand(10,15);
        $this->speed = rand(10,20);
    }
}