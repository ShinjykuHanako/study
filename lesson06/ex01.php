<?php
class Car {
  public $name;
  public $color;
  public $speed;
  public $fuel;

  function accellerator() {
    $this->speed += 5;
  }
}