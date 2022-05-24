<?php
function plus(int $n1, int $n2): int {
  return $n1 + $n2;
}
function hello(): String {
  return 'hello';
}

$a = plus(10, 5);
echo $a, '<br />';

$b = hello();
echo $b, '<br />';