<?php

namespace Bonuses;

abstract class Bonus
{
    protected $speed;
    protected $health;
    protected $armor;
    protected  $damage;
    public abstract function __construct();


    public abstract function getBonus();

    public abstract function __toString(): string;



}