<?php
// funkcja Date()
    echo "Rok - miesiąc - dzień: ", date("Y-m-d"),'<br>'; //2020-11-08
    echo "Rok - miesiąc - dzień: ", date("Y-M-d"),'<br>'; //2020-Nov-08
    echo "Rok - miesiąc - dzień: ", date("d-m-Y"),'<br>'; //08-11-2020
    echo date("G:i:s"),'<br>'; //godz min sek
    echo date("h:i:sa"),'<br>'; //godz min sek pm/am
    echo date("Y-m-d G:i:s"),'<br>'; //rok msc d godz min sek
    echo date("w"),'<br>'; //0 - niedziela

// $funcja getdate()
    $data = getdate();

    echo '<pre>',print_r($data),'</pre>';

    //dzien - miesiac - rok, dzientygodnia
    //08 - listopad - 2020, niedziela

    echo $data['mday'], $data['mon'], $data['year'], $data['weekday'];     
    
    $mday = $data['mday'];
    $mon = $data['mon'];
    $year = $data['year'];
    $weekday = $data['weekday'];

    $result = $mday.' - '.$mon.' - '.$year.', '.$weekday;
    echo $result
    
?>