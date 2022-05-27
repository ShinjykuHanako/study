<?php

//共通
class Animai{
    private $name;
    private $color;
    private $photo;
            
    function __construct($n, $c, $p) {
        $this->name = $n;
        $this->color = $c;
        $this->photo =  $p;
    }

    function nakigoe(): string{
        return "ニャーニャー";
    }
    
    function shippo(): string{
        return "長い";
    }
    
    function ashi(): string{
        return "四本";
    }


    function namae(): string{
        return $this->name;
    }

    function kenoiro(): string{
        return $this->color;
    }
    
    function photo(): string{
        return $this->photo;
    }
}

////////////////////////////////////////////////////////////////////////////////

///猫
class Cat extends Animai{
 
   function __construct($n , $c, $p) {
       parent::__construct($n , $c, $p);
    }
     
}
///犬
class Dog extends Animai{
 
   function __construct($n , $c, $p) {
       parent::__construct($n , $c, $p);
    }
     
}
///狐
class Fox extends Animai{
 
   function __construct($n , $c, $p) {
       parent::__construct($n , $c, $p);
    }
     
}




