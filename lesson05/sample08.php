<?php
function hello($data) {
  echo '引数で受け取った値は: ' . $data . '<br />';
  $data = '関数内で変更した値です。';
  echo '関数内で変更した値は: ' . $data . '<br />';
}

$data = '呼び出し元で代入した変数です。';
hello($data);
echo $data . '<br />';
