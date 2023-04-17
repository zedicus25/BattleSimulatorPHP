<?php

namespace Fractions;

require_once 'Faction.php';
class CursedFaction extends Faction
{
    public function __construct()
    {
        $this->name = "Cursed Faction";
        $this->damageBonus = rand(200,300);
        $this->armorBonus = rand(-50,-80);
        $this->speedBonus = rand(5,10);
        $this->healthBonus = rand(-100,-200);
    }
}