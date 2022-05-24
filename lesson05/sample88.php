<?php
function uranai($age, $sex){

    $amari = $age % 3;

    if($sex == "woman"){
        $amari++;
    }

    $kekka  = "";
    if($amari == 0){
        $kekka = "凶";
    }elseif($amari == 1){
        $kekka = "小吉";
    }elseif($amari == 2){
        $kekka = "中吉";
    }else{
        $kekka = "大吉";
    }
        return $kekka;
}

///////////////////////////////////////

$nemrei = 30;
$seibetu = "man";

$watasi = uranai($nemrei, $seibetu);

if($watasi != "凶"){
    echo "<h1 style='color:red;'>{$watasi}</h1>";
}else{
    echo "<h1 style='color:blue;'>今日は占いはお休みみたい！！</h1>";
}


