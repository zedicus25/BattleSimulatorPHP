<?php

namespace Squads;

use Soldiers\Commander;
use Soldiers\Warior;


require_once 'Soldiers/Warior.php';
class Squad
{
     private const  MIN_SOLDIERS = 5;
     private const MAX_SOLDIERS = 25;

     private $name;

     private $currentCount;
     private $soldiers;

     private $commander;

     public function __construct($name)
     {
         $this->name = $name;
         $this->currentCount = 0;
         $this->soldiers = array();
     }

    public function addSoldier(Warior $warior): void
    {
        if($this->currentCount < (self::MAX_SOLDIERS-1)){
            array_push($this->soldiers, $warior);
            $this->currentCount = $this->currentCount + 1;
        }
    }

    public function removeSoldier($id) : void
    {
        if($this->currentCount > 0){
            unset($this->soldiers[$id]);
            $this->currentCount = $this->currentCount + 1;
        }
    }

    public function setCommander(Commander $commander): void
    {
        array_unshift($this->soldiers , $commander);
        $this->currentCount = $this->currentCount + 1;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}