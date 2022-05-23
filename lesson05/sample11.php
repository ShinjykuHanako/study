<?php
function hello() {
  global $data;
  $data = 'hello関数で変更しました。';
}

$data = '呼び出し元で代入した変数です。';
echo $data, '<br />';
hello();
echo $data, '<br />';
