<?php
$points = [10, 20, 30, 40, 50];
echo '<pre>';
print_r($points);

$points[0] = 60;
$points[1]++;
$points[2] = $points[1] + $points[0];
unset($points[3]);
print_r($points);

echo '</pre>';
