<?php
require_once "car.php";
$c = new Car();
// ②
$c->name = "ヤリス";
$c->color = "赤";
$c->speed = 0;
$c->fuel = 100;
// ③
$c->accellerator();
// ④
$c->display();
