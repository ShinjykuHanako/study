<?php
interface Yamagutikumi{
    function batch();
    function seifuku();
}

class Oyabun implements Yamagutikumi{
    function batch(){
        echo "金バッチ<br>";
    }
    function seifuku(){
    echo "高級ウールMサイズ<br>";
}
}
class Kanbu implements Yamagutikumi{
    function batch(){
        echo "銀バッチ<br>";
    }
function seifuku(){
    echo "普通ウールLサイズ<br>";
}
}
class Kobun implements Yamagutikumi{
    function batch(){
        echo "銅バッチ<br>";
    }
public function seifuku(){
    echo "木綿Lサイズ<br>";
}
    }
/////////////////
$Yamagutikumis = [
    new Oyabun(),
    new Kanbu(),
    new Kobun()
];

foreach($Yamagutikumis as $v){
    echo"----------<br>";
    $v->batch();
    $v->seifuku();
}