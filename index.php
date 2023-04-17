
<?php
require_once 'Soldiers/FootWariors/FootWarior.php';

    $foot = new \Soldiers\FootWariors\FootWarior();
    echo "Speed: ";
    echo $foot->getSpeed();
    echo "<br>";
    echo "Damage: ";
    echo $foot->getDamage();
    echo "<br>";
    echo "Health: ";
    echo $foot->getHealth();
    echo "<br>";

?>
