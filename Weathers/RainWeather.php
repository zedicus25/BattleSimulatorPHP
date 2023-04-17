<?php

namespace Weathers;

class RainWeather extends Weather
{
    public function __construct()
    {
        $this->speed =rand(-10,-15);
    }



    public function __toString(): string
    {
        return "<br>Reduce speed by $this->speed<br>";
    }
}