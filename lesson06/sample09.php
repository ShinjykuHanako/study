<?php
require_once "car.php";

Car::$maker = 'トヨタ';

$c1 = new Car('ヤリス', '赤', 0, 100);

echo '<br>メーカー:' . Car::$maker . "<br>";
echo '<br>車の名前は' . $c1->getName() . ': 車の台数は' . Car::getCount() . '台です。', '<br />';

$c2 = new Car('アクア', '黒', 0, 100);
echo '<br>車の名前は' . $c2->getName() . ': 車の台数は' . Car::getCount() . '台です。', '<br />';
