<?php
    function polepodst($r){
        return (pi()*(pow($r,2)));
    }
    function polepowb($r,$h){
        return 2*(pi()*$r*$h);
    }
    function polepowcalk($r,$h){
        $pp = (pi()*(pow($r,2)));
        $pb = 2*(pi()*$r*$h);
        return 2*$pp + $pb;
    }
    function objetosc($r,$h){
        $pp = (pi()*(pow($r,2)));
        return $pp*$h;
    }