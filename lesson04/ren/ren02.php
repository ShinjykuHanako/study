<?php

for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0) {
        echo "Bizz Buzz" , "<br>";
    }elseif($i % 3 == 0) {
     echo "Bizz", "<br>";
    }elseif($i % 5 == 0) {
        echo "Buzz", "<br>";
    }else{
        echo $i , "<br>";
    }
}
?>