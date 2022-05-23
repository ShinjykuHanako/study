<?php
function plus($n1, $n2) {
  $sum = $n1 + $n2;
  return $sum;
}

$p1 = plus(10, 5);
echo '戻りました$p1は', $p1, 'です。', '<br />';

$p2 = plus(3, 4);
echo '戻りました$p2は', $p2, 'です。', '<br />';

//echo '$p1は', $p1, 'です。', '<br />';
//echo '$p2は', $p2, 'です。', '<br />';
