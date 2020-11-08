<?php
    function data($name, $surname){
        $name = ucfirst(strtolower($name));
        $surname = ucfirst(strtolower($surname));
        return "$name $surname";
    }
?>