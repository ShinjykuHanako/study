<?php
require_once "car.php";

$c1 = new Car('ヤリス', '赤', 0, 100);

$c1->display();

echo "<br>";

$c1->speed = -100;
$c1->fuel = -100;

$c1->display();
