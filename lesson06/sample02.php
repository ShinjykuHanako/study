<?php
require_once "car.php";

$c1 = new Car();
$c1->name = "ヤリス";
$c1->color = "赤";
$c1->speed = 0;
$c1->fuel = 100;

$c2 = new Car();
$c2->name = "アクア";
$c2->color = "青";
$c2->speed = 0;
$c2->fuel = 50;

echo "★1台目★<br>";
$c1->accellerator();
$c1->display();

echo "★2台目★<br>";
$c2->accellerator();
$c2->display();