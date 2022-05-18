<?php
$s1 = 'hello';
$s2 = 'Hello';
$s3 = 'bye';

$r1 = $s1 <=> $s2;
echo '$s1と$s2を三方比較演算子で比較した結果は' . $r1, 'です。<br />';

$r2 = strcmp($s3, $s1);
echo '$s3と$s1をstrcmp関数で比較した結果は' . $r2, 'です。<br />';

$r3 = strcasecmp($s1, $s2);
echo '$s1と$s2をstrcasecmp関数で比較した結果は' . $r3, 'です。<br />';
