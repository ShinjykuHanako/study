<?php
 require_once './animal.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            table{
                border: black solid 3px;
                border-collapse: collapse;
                width: 900px;
            }
            th{
               width : 200px; 
                border: black solid 3px;
            }
            thead{
                height: 30px;
                background-color:yellow;
            }
            
        </style>  
        <title>動物</title>
    </head>
    <body>
        <?php
        $animals = [
            new Cat("ミケ", "黒", "cat.jpg"),
            new Dog("ポチ", "白", "dog.jpg"),
            new Fox("コンタ", "茶", "fox.jpg")
            ];
        ?>

        <h3>動物だよ！</h3>        
        
        <table>
            
            <thead>
            <tr>
     <th>名前</th><th>尻尾</th><th>足</th><th>毛色</th><th>鳴き声</th><th>写真</th>                
            </tr>        
            </thead>
            
        <?php
        foreach ($animals as $animal){
        ?>
            
            <tr>
                <th>
                 <?= $animal->namae() ?>   
                </th>   
                <th>
                 <?= $animal->shippo() ?>   
                </th>   
                <th>
                 <?= $animal->ashi() ?>   
                </th>   
                <th>
                 <?= $animal->kenoiro() ?>   
                </th>   
                <th>
                 <?= $animal->nakigoe() ?>   
                </th>   
                <th>
                    <img src="./image/<?= $animal->photo() ?>">   
                </th>   
            </tr>
            
        <?php
        }
        ?>
            
        </table><!-- comment -->            

    </body>
</html>
