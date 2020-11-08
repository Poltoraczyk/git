<?php
    // zmienne globalne

    $global = 10;
    // echo $global;

    function show(){
        echo "Wartość \$global w funkcji: $GLOBALS[global]<br>";
        echo "Wartość \$global w funkcji: {$GLOBALS['global']}<br>";
        echo "Wartość \$global w funkcji: ".$GLOBALS['global'];
    }

    show();

    //zmienna lokalna
    function number(){
        $x = 10;
        echo "zmienna wynosi: $x<br>";
    }

    number();
    // echo $x; //error

    //zmienne statyczne
    function add(){
        $x = 4;
        // $x = $x = 10;
        $x += 10;
        echo "\$x = $x";
    }

    add(); //14
    add(); //14
    add(); //14

    function add1(){
        static $x = 4;
        $x += 10;
        echo "\$x = $x";
    }

    add1(); //14
    add1(); //24
    add1(); //34
    echo '<br>';

    // przekazywanie argumentow
    // przekazywanie argumentow przez wartosc

    function addThree($x){
        $x += 3;
    }

    $number = 5;

    echo "\$number przed wywolaniem funkcji: $number<br>";
    addThree($number);
    echo "\$number po wywolaniem funkcji: $number<br>";

    // utworzyc funkcje addFour, przekazywanie argumentow przez referencje

    function addFour(&$x){
        $x += 4;
    }

    $number = 5;

    echo "\$number przed wywolaniem funkcji: $number<br>"; //5
    addFour($number);
    echo "\$number przed wywolaniu funkcji: $number<br>"; // 9
    addFour($number);
    echo "\$number przed wywolaniem funkcji: $number<br>"; //13

    // argumenty domyslne
    function add2($x,$y = 5){
        return $x + $y;
    }

    $a = 3;
    echo add2(2, 4); //6
    echo add2(10); //15
    echo add2($a, $a); //6
    echo add2($y = 10, $x = -1); //9

    //argumenty i typy danych
    function multi(int $x, int $y = 5){
        return $x * $y;
    }

    echo multi(1); //5
    echo multi(3, 5); //15
    echo multi(3.5, 5); //15


?>