<?php
require_once "car.php";
$c = new Car();
// ②
$c->name = "プリウス";
$c->color = "黒";
$c->speed = 0;

$c->fuel = 200;
// ③
$c->accellerator();
// ④
$c->display();
?>