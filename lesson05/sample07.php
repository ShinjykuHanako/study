<?php
function sum($array) {
  $sum = 0;
  foreach ($array as $value) {
    $sum += $value;
  }
  return $sum;
}

function tax($sum) {
  return $sum * 1.1;
}

$param = [100, 400, 350, 150];

//$sum = sum($param);
//$total = tax($sum);

$total = tax(sum($param));

echo '総計は', $total, '円です。';
