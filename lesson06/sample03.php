<?php
class Car {
  public $name;
  public $color;
  public $speed;
  public $fuel;

  function accellerator() {
    $this->speed += 5;
    $this->fuel -= 5;
  }

  function display() {
    echo '車の名前は' . $this->name . 'です。', '<br />';
    echo '車の色は' . $this->color . 'です。', '<br />';
    echo '車の速度は' . $this->speed . 'kmです。', '<br />';
    echo '車のガソリン量は' . $this->fuel . 'Lです。', '<br />';
  }
}

$c1 = new Car();
$c1->name = "ヤリス";
$c1->color = "赤";
$c1->speed = 0;
$c1->fuel = 100;

$c2 = $c1;
$c2->name = "アクア";
$c2->color = "青";
$c2->speed = 0;
$c2->fuel = 50;

$c1->accellerator();
$c1->display();
$c2->accellerator();
$c2->display();