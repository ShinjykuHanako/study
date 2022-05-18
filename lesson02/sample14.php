<?php
$users =['佐藤', '鈴木', '田中'];
$cnt = count($users);

echo '配列の要素数は' . $cnt . 'です<br />';

$exists_in = in_array('田中', $users);
$exists_search = array_search('田中', $users);
$implode_str = implode('、 ', $users);
$explode_str = explode('、 ', $implode_str);

echo 'in_array: ' . $exists_in . '<br />';
echo 'array_search: ' . $exists_search . '<br />';
echo 'implode_str: ' . $implode_str . '<br />';
echo 'explode_str[0]: ' . $explode_str[0] . '<br />';
echo 'explode_str[1]: ' . $explode_str[1] . '<br />';
echo 'explode_str[2]: ' . $explode_str[2] . '<br />';
