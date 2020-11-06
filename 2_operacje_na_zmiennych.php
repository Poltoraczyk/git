<?php
    //wersja php
    echo PHP_VERSION; //7.4.10

    //porownanie
        $x = 20;
        $y = 22;

        if ($x == $y) {
            echo "<br>$x jest rowna $y";
        }else {
            echo "<br>$x nie jest równa $y<br>";
        }

        $x = 20;
        $y = 20.0;

        if ($x === $y) {
            echo "\$x jest równa \$y<br>";
        }else {
            echo"\$x nie jest rowna \$y <br>";
        }
        
        echo gettype($x),'<br>'; //integer
        echo gettype($y),'<br>'; //double
    //operator <=>

        $x = 25;
        $y = 25.0;

        echo $x <=> $y;

    // SWITCH
    
    $country = 'Polska';
    switch ($country) {
        case 'Polska':
            echo '<br>Pochodzisz z Polski';
            break;
        case 'Gruzja':
            echo '<br>Pochodzisz z Gruzji';
        break;
        default:
            echo '<br>Pochodzisz z innego kraju niż Polska lub Gruzja';
break;
    }
    echo'<hr>';
/*  Dwie zmienne mają wartośći 7.5 oraz 10,
    sprawdz ktora z nich jest wieksza i wyswietl na ekranie komunikat o tresci:
    Zmienna A jest wieksza od zmiennej B lub zmienna B jest wieksza od zmiennej A
    Jeśli zmiennne beda rowne to wyswietl komunikat o tresci:
     Zmienna A i B jest równa 
     Wykorzystaj operator <=>
*/
    // zadanie 
    $a = 7.5;
    $b = 10;

    switch ($a <=> $b) {
        case $b <= $a:
            echo'<br><b>Zmienna A jest wieksza od zmiennej B<br>';
            break;
            
        case $a <= $b;
                echo'<br><b>Zmienna B jest wieksza od zmiennej A<br>';
            break;
        default:
            echo'<br><b>Zmienna A i B jest równa<br>';
        break;
    }
    // postinkrementacja $x++ => $x = $x + 1
    // postdekrementacja $x-- => $x = $x-1

    // preinkrementacja ++$x
    // predekrementacja --$x

    $x = 10;
    echo $x++; //10
    echo $x; //11
    echo ++$x; //12
    echo --$x; //11

    $x=1;
    echo $x; //1
    $x=$x++; 
    echo $x; //1
    $x=++$x; 
    echo $x; //2
    $y=++$x; 
    echo $x; //3
    echo $y; //3
    $y=$x++;
    echo $x; //4
    echo "$y<br>"; //3
    
    
    ?>

