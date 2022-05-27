<?php
abstract class Vehicle {
  public $name;
  public $color;
  public $speed;
  public $fuel;

  abstract function display();
  abstract function move();
}

class Car extends Vehicle {
  function display() {
    echo '車の名前は' . $this->name . 'です。', '<br />';
    echo '車の色は' . $this->color . 'です。', '<br />';
    echo '車の速度は' . $this->speed . 'kmです。', '<br />';
    echo '車のガソリン量は' . $this->fuel . 'Lです。', '<br />';
  }
  function move() {
    echo '車は走ります。', '<br />';
  }
}

$c = new Car();
$c->name = '車';
$c->color = '黄色';
$c->speed = 100;
$c->fuel = 50;
$c->display();
$c->move();

new Vehicle();