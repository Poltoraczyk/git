<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
</head>
<body>
    <h4>Dane pobrane z formularza</h4>
    <?php
    //echo '<pre>',print_r($_GET);                       
    //echo $_GET['surname']
    
    /*
    echo '<pre>';
        print_r($_GET);
    echo '<pre>';
    */
//Dodaj pole imie oraz pole kod pocztowy (składa sie z dwóch pól, pierwsze ma rozmiar 2 , drugie 3)
//isset()
//operatory logiczne AND &&, OR||

//Sprawdz czy uzytkownik wypelnil wszystkie dane jesli tak to wyswietl mu heredoc w przeciwnym razie przekieruj uzytkownika do formularza


    if (!empty($_GET['name']) && !empty($_GET['surname'])&& !empty($_GET['pass'])&& !empty($_GET['zipcode'])&& !empty($_GET['zipcode2']) && !empty($_GET['color']) && isset($_GET['statute'])) {
    $color = $_GET['color'];
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    switch ($color){
        case 'r':
            $color = 'czerwony';
            break;
        case 'g':
            $color = 'zielony';
            break;
        case 'b':
            $color = 'niebieski';
            break;
        }
   echo <<<T
        Imię i Nazwisko: $_GET[name] $_GET[surname]<br>
        Hasło: {$_GET['pass']}<br>
        Kod pocztowy: $_GET[zipcode]-$_GET[zipcode2]<br>
        Ulubiony kolor: $color<hr>
T;

    echo "<a href=\"./1_form.php?name=$name&surname=$surname\">Popraw dane w formularzu</a>";
    }else{
    //header{'location: ./1form.php'};
    ?>
    <script>
        history.back();
    </script>
    <?php

    }
// po nie wypelnieniu, danych przekierowuje uzytkownika do formularza, dane w formularzu maja byc wypelnione(oprocz hasla)
//wykorzystaj skrypt w js (historia)


?>
</body>
</html>