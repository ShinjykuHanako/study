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
echo "２から３００までの素数<br>";
for($i = 2; $i <= 300; $i++){
   $sosu = sosu($i);
   echo "{$sosu} ";
}


?>