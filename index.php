
<?php
require_once 'Squads/Squad.php';
require_once 'Soldiers/Commander.php';
require_once 'Bonuses/Defend.php';
require_once 'Bonuses/Faster.php';
require_once 'Soldiers/FootWariors/FootWarior.php';
require_once 'Soldiers/Mounted.php';
require_once 'BattleFields/BattleField.php';
require_once 'Weathers/RainWeather.php';
require_once 'Fractions/CursedFaction.php';


    $squad1 = new \Squads\Squad("Some squad");
    $commander = new \Soldiers\Commander(new \Fractions\CursedFaction());
    $commander->addBonus(new \Bonuses\Faster());
    $squad1->setCommander($commander);
    for ($i = 0; $i < 8; $i++){
        $squad1->addSoldier(new \Soldiers\FootWariors\FootWarior(new \Fractions\CursedFaction()));
    }

    $squad2 = new \Squads\Squad("Some squad 2");
    $commander = new \Soldiers\Commander();
    $commander->addBonus(new \Bonuses\Defend());
    $squad2->setCommander($commander);
    for ($i = 0; $i < 5; $i++){
        $squad2->addSoldier(new \Soldiers\FootWariors\FootWarior());
    }

    $battleField = new \BattleFields\BattleField("Battlefield", new \Weathers\RainWeather());
    $battleField->addSquad($squad1);
    $battleField->addSquad($squad2);
    echo $battleField;



?>
