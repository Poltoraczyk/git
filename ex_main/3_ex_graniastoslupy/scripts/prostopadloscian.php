<?php
    function pole($a, $b ,$c){
        return 2*($a*$b+$a*$c+$b*$c);
    }
    function objetosc($a, $b, $c){
        return $a*$b*$c;
    }   
    function przekatna($a, $b, $c){
        return number_format(sqrt(pow($a, 2) + pow($b, 2) + pow($c, 2)), 2);
    }
?>
