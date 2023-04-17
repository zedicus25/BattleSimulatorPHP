<?php

namespace Shields;

class Shield
{
    private $defend;
    public function __construct()
    {
        $this->defend = rand(10,20);
    }

    /**
     * @return int
     */
    public function getDefend(): int
    {
        return $this->defend;
    }

    /**
     * @param int $defend
     */
    public function setDefend(int $defend): void
    {
        $this->defend = $defend;
    }
}