<?php
class Car {
  private $name;
  private static $count = 0;
  public static $maker;

  function __construct($name) {
    $this->name = $name;
    self::$count++;
  }

  function getName() {
    return $this->name;
  }

  static function getCount() {
    return self::$count;
  }
}

$c1 = new Car('ヤリス');
Car::$maker = 'トヨタ';
echo '車の名前は' . $c1->getName() . ': 車の台数は' . Car::getCount() . '台です。', '<br />';

$c2 = new Car('アクア');
echo '車の名前は' . $c2->getName() . ': 車の台数は' . Car::getCount() . '台です。', '<br />';

echo Car::$maker;