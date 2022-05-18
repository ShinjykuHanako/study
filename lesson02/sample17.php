<?php
$f1 = [
  'apple' => 'りんご',
  'orange' => 'オレンジ',
  'banana' => 'バナナ',
  'grape' => 'ぶどう',
  'peach' => 'もも'
];

$f2 = [
  'apple' => 'りんご',
  'orange' => 'オレンジ',
  'banana' => 'バナナ',
  'grape' => 'ぶどう',
  'peach' => 'もも'
];

$f3 = [
  'apple' => 'りんご',
  'orange' => 'オレンジ',
  'banana' => 'バナナ',
  'grape' => 'ぶどう',
  'peach' => 'もも'
];

echo '<pre>';

sort($f1);
print_r($f1);

asort($f2);
print_r($f2);

ksort($f3);
print_r($f3);

echo '</pre>';
