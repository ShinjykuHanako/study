<?php
interface Vehicle {
  public function display();
  // アクセス修飾子をつけない場合はpublicになる
  function move();
}

class Car implements Vehicle {
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

class Airplane implements Vehicle {
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

  function display() {
    echo '飛行機の名前は' . $this->name . 'です。', '<br />';
    echo '飛行機の色は' . $this->color . 'です。', '<br />';
    echo '飛行機の速度は' . $this->speed . 'kmです。', '<br />';
    echo '飛行機のガソリン量は' . $this->fuel . 'Lです。', '<br />';
  }

  function move() {
    echo '飛行機は飛びます。', '<br />';
  }
}

$c = new Car('ヤリス', '黄色', 100, 50);
$c->display();
$c->move();

$a = new Airplane('ジェットスカイ', '青色', 1000, 100);
$a->display();
$a->move();