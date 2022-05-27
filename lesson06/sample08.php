<?php
require_once "car.php";

$c1 = new Car('ヤリス', '赤', 0, 100);


$c1->display();

echo "<br>";

$c1->setSpeed(-100);
$c1->setFuel(-100);

$c1->display();
