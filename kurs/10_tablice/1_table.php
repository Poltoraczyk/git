<?php
    //tablice indeksowane tematycznie

    $colors = array('biały', 'zielony', 'czerwony', 'aqua');

    echo '<pre>';
        print_r($colors);
    echo '</pre>';

    echo 'Pierwszy element tablicy:', $colors[0],'<br>';
    echo "Ilość elementów w tablicy:", count($colors),'<br>';

    for ($i=0; $i < count($colors) ; $i++) { 
        if ($i== count($colors) -1) {
            echo $colors[$i];
        }else{
        echo $colors[$i],', ';
    }
}
?>