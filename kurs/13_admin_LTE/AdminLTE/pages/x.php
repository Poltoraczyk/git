<?php
    session_start();
    print_r($_POST);
    echo '<hr>';

    if (count($_SESSION['marketing']) > 0) {
        foreach ($_SESSION['marketing'] as $key=> $value){
            if (isset($_POST["marketing$value"])){
                echo 'Zaznaczyłeś id=', $value,'<br>';
            }
        }
    }

    echo '<hr>';
    foreach ($_SESSION['marketing'] as $key=> $value){
        echo "$value<br>";
    }
    echo 'Ilość elementów: ', count($_SESSION['marketing']);
?>