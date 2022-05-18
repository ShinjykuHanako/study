<?php
$num = 1500;

if ($num >= 1000) {
  echo 'タオルおまけ', '<br />';
} elseif ($num >= 500) {
  echo '石鹸おまけ', '<br />';
} elseif ($num >= 100) {
  echo 'ガムおまけ', '<br />';
} else {
  echo 'おまけなし。', '<br />';
}