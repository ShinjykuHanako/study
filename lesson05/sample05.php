<?php
function greeting($message, $name='名無し') {
  echo "{$message} {$name}", '<br />';
}

greeting('こんにちは', '佐藤です。');
greeting('こんばんは');