<?php
function hello($name = 'no name') {
  echo "Hello {$name}!!", '<br />';
}

hello('satou');
hello('suzuki');
hello();
