<?php

namespace Armors\LightArmors;

use Armors\Armor;

require_once 'Armors/Armor.php';
abstract class LightArmor extends Armor
{
    public function __construct()
    {
        $this->armor = rand(5,10);
        $this->speed = rand(1,3);
    }
}