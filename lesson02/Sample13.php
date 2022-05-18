<?php
// users配列の初期化

//$users = array('佐藤', '鈴木', '田中');

$users = ['佐藤', '鈴木', '田中'];

// users配列の1番目の要素を取得
echo $users[1];
echo '<br />';

// depts配列を宣言
$depts = ['総務'];
// depts配列に新しい要素を追加
$depts[] = '営業';
$depts[] = '経理';
$depts[] = '開発';

echo '<pre>';
var_dump($depts);
print_r($users);
echo '</pre>';

echo $depts;