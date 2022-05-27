<?php
class Car {
  public $name;
  public $color;
  public $speed;
  public $fuel;

  function display() {
    echo '車の名前は' . $this->name . 'です。', '<br />';
    echo '車の色は' . $this->color . 'です。', '<br />';
    echo '車の速度は' . $this->speed . 'kmです。', '<br />';
    echo '車のガソリン量は' . $this->fuel . 'Lです。', '<br />';
  }
}

class Truck extends Car {
  public $capacity;

  function display() {
    parent::display();
    echo '積載量は' . $this->capacity . 'tです。', '<br />';
  }
}

$t = new Truck();
$t->name = 'トラック';
$t->color = '黄色';
$t->speed = 100;
$t->fuel = 50;
$t->capacity = 10;
$t->display();