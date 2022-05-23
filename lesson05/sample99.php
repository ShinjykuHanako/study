<?php
function sosu($num){
    for($i=2; $i < $num; $i++){
        if($num % $i == 0){
            return "";
        }
    }
    return $num;
}

///////////////////////////////
echo "２から１００までの素数<br>";
for($i = 2; $i <= 100; $i++){
   $sosu = sosu($i);
   echo "{$sosu} ";
}


?>