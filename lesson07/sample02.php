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
  private $capacity;
  private static $count = 0;
  const TIRES = 6;

  function __construct() {
    self::$count++;
  }

  function display() {
    parent::display();
    echo '積載量は' . $this->capacity . 'tです。', '<br />';
    echo '現在のトラックの数は' . self::$count . 'です。', '<br />';
    echo 'タイヤの数は' . self::TIRES . 'です。', '<br />';
  }

  function setCapacity($capacity) {
    $this->capacity = $capacity;
  }
}

$t = new Truck();
$t->name = 'トラック';
$t->color = '黄色';
$t->speed = 100;
$t->fuel = 50;
$t->setCapacity(10);
$t->display();