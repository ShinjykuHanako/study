<?php
$fruits = [
  'apple' => ['name' => 'りんご', 'stock' => 2, 'price'=> 150],
  'orange' => ['name' => 'みかん', 'stock' => 5, 'price'=> 120],
  'banana' => ['name' => 'バナナ', 'stock' => 10, 'price'=> 180],
  'grape' => ['name' => 'ぶどう', 'stock' => 4, 'price'=> 200]
];

echo '<pre>';
print_r($fruits);

echo "{$fruits['banana']['name']}の在庫は{$fruits['banana']['stock']}個です。";

echo '</pre>';
