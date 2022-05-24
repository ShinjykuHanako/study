<?php
class Car {
  private $name;
  private $color;
  private $speed;
  private $fuel;

  function __construct($name, $color, $speed, $fuel) {
    $this->name = $name;
    $this->color = $color;
    $this->speed = $speed;
    $this->fuel = $fuel;
  }

  function setSpeed($speed) {
    if ($speed > 0) {
      $this->speed = $speed;
    }
  }

  function setFuel($fuel) {
    if ($fuel > 0) {
      $this->fuel = $fuel;
    }
  }

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

$c1 = new Car('ヤリス', '赤', 0, 100);
$c1->setSpeed(-100);
$c1->setFuel(-100);

$c1->display();
