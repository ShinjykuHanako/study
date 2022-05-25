<?php
//関数定義　引数：数値　　戻り値：文字列
function yomi(int $num):string{
$check = $num % 10;
$yomi = "ほん";
if($check == 0 or $check == 1 or $check == 6){ 
 $yomi = "ぽん";
}elseif($check == 3){
    $yomi = "ぼん";
}
return $num . $yomi;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>鉛筆</title>
    </head>
    <body>

        <?php  //loop start
       for($i = 1; $i <= 110; $i++){
        ?>

        <h2><?= yomi($i)  ?></h2>
        
        <?php   // loop end
       }
        ?>

    </body>
</html>
