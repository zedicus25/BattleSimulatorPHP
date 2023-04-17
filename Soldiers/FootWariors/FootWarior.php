<?php

namespace Soldiers\FootWariors;

use Soldiers\Warior;

require_once 'Soldiers/Warior.php';
class FootWarior extends Warior
{
    public  function __toString(): string
    {
        return "Speed: $this->speed <br> Health: $this->health <br> Damage: $this->damage <br>";
    }
}
?>