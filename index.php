
<?php
require_once 'Squads/Squad.php';
require_once 'Soldiers/Commander.php';
require_once 'Bonuses/Defend.php';
require_once 'Bonuses/Faster.php';
require_once 'Soldiers/FootWariors/FootWarior.php';
require_once 'Soldiers/Mounted.php';

    $squad = new \Squads\Squad("Some squad");
    echo  $squad->getName();
    echo "<br>";
    echo "<br>";
    $commander = new \Soldiers\Commander();
    //$commander->addBonus(new \Bonuses\Defend());
    $commander->addBonus(new \Bonuses\Faster());
    $squad->setCommander($commander);
    for ($i = 0; $i < 8; $i++){
        $squad->addSoldier(new \Soldiers\FootWariors\FootWarior());
    }

    echo $squad;
?>
