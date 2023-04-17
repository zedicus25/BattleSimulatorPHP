<?php

namespace Weathers;

abstract class Weather
{
    protected $speed;

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    public abstract function __toString(): string;


}