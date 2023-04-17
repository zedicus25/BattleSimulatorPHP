<?php

namespace Fractions;

require_once 'Faction.php';
class SacredFaction extends Faction
{
    public function __construct()
    {
        $this->name = "Sacred Faction";
        $this->damageBonus = rand(-30,-40);
        $this->armorBonus = rand(50,70);
        $this->speedBonus = rand(10,15);
        $this->healthBonus = rand(30,45);
    }
}