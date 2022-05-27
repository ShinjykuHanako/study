<?php
trait Vehicle {
  public $name;
  public $color;
  public $speed;
  public $fuel;

  public function display() {
    echo '車の名前は' . $this->name . 'です。', '<br />';
    echo '車の色は' . $this->color . 'です。', '<br />';
    echo '車の速度は' . $this->speed . 'kmです。', '<br />';
    echo '車のガソリン量は' . $this->fuel . 'Lです。', '<br />';
  }
}

class Car {
  use Vehicle;
}

$c = new Car();
$c->name = 'ヤリス';
$c->color = '黄色';
$c->speed = 100;
$c->fuel = 50;
$c->display();
