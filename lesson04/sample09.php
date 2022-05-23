<?php
// 連想配列を作成する
$employees = [
<<<<<<< HEAD
  //$employees[0]
  ['id' => 1, 'name' => '佐藤', 'email' => 'user1@example.com', 'dept' => '営業'],
  //$employees[1]
   ['id' => 2, 'name' => '鈴木', 'email' => 'user2@example.com', 'dept' => '経理'],
  //$employees[2]
  ['id' => 3, 'name' => '高橋', 'email' => 'user3@example.com', 'dept' => '営業'],
  //$employees[3]
=======
  ['id' => 1, 'name' => '佐藤', 'email' => 'user1@example.com', 'dept' => '営業'],
  ['id' => 2, 'name' => '鈴木', 'email' => 'user2@example.com', 'dept' => '経理'],
  ['id' => 3, 'name' => '高橋', 'email' => 'user3@example.com', 'dept' => '営業'],
>>>>>>> 535aceaecefffe6f8ec8c46a40982f13b5b25a9b
  ['id' => 4, 'name' => '田中', 'email' => 'user4@example.com', 'dept' => '総務'],
  ['id' => 5, 'name' => '渡辺', 'email' => 'user5@example.com', 'dept' => '開発'],
  ['id' => 6, 'name' => '伊藤', 'email' => 'user6@example.com', 'dept' => '営業'],
  ['id' => 7, 'name' => '山本', 'email' => 'user7@example.com', 'dept' => '経理']
];

// tableタグを出力する(枠線をつける)
echo '<table border="1">';
// ヒアドキュメントを使ってタイトル部分を出力する
echo <<<EOF
  <tr>
    <th>ID</th>
    <th>名前</th>
    <th>メールアドレス</th>
    <th>部署</th>
  </tr>
EOF;

// 連想配列をループして行を出力する
foreach ($employees as $index => $employee) {
  // tableタグ内のtrタグを出力する
  // key(要素番号)を2で割って割り切れなければ背景に色をつける
  // 2で割り切れた場合は背景色をつけない
  if ($index % 2 !== 0) {
    echo '<tr bgcolor="#eee">';
  } else {
    echo '<tr>';
  }
  echo '<td>' . $employee['id'] . '</td>';
  echo '<td>' . $employee['name'] . '</td>';
  echo '<td>' . $employee['email'] . '</td>';
  echo '<td>' . $employee['dept'] . '</td>';
  echo '</tr>';
}
echo '</table>';
