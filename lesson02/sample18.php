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

rsort($f1);
print_r($f1);

arsort($f2);
print_r($f2);

krsort($f3);
print_r($f3);

echo '</pre>';
