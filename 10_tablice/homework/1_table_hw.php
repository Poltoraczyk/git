<?php
    //tablice indeksowane tematycznie

    $colors = array('aqua', 'magenta', 'cyan');

    /* echo '<pre>';
        print_r($colors);
    echo '</pre>'; */
 
    function licz($i){
        $i++;
        return $i;
    }
      
    for ($i=0; $i < count($colors) ; $i++) { 
        if ($i== count($colors) -1) {
            echo licz($i), ' kolor: ', $colors[$i];
        }else{
        echo licz($i), ' kolor: ', $colors[$i],'<br>';
    }
}
?>