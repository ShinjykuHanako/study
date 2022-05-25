<?php
class Car {
  public $name;
  public $color;
  public $speed;
  public $fuel;

  function __construct() {
    $this->name = "ヤリス";
    $this->color = "赤";
    $this->speed = 0;
    $this->fuel = 100;
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
// ここまでがCarクラスの定義
