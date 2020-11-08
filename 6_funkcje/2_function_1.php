<?php
    function data($name, $surname, $color){
        $name = ucfirst(strtolower($name));
        $surname = ucfirst(strtolower($surname));
        return "Imię i nazwisko: $name $surname<br>Kolor: $color";
    }
?>