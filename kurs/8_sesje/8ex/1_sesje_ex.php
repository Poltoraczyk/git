<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesja1</title>
</head>
<body>
    <h4>Strona startowa</h4>
    <form action="./2_sesje_ex.php" method="post">
    <select name="wojewodztwa">
    <option value="wielkopolskie">wielkopolskie</option>
    <option value="slaskie">Śląskie</option>
    <option value="malopolskie">Małopolskie</option>
    </select>
    <input type="submit" value="wyslij">
    </form>
    <?php
        //session_start(); //przyjęło sie żeby wrzucać na samą górę
        //echo "identyfikator sesji", session_id();
        //$_SESSION['name'] = 'Anna';
        //echo "<hr>Imię: $_SESSION[name]<br>";
        
    ?>
    <a href="./2_sesje.php">Sesje2</a>
</body>
</html>
<!--usunąć na stronie 3 zmienną sesyjną name i cofnąć
 się do drugiej strony i sprawdzić wynik 
 Dodać na pierwszej stronie formularz z województwami (3, select)
 Formularz przekierowuje do drugiej strony gdzie wyświetla
 Wybrane województwo, na drugiej stronie w zależności od wybranego województwa
 Mamy do wyboru po 3 miasta(checkbox) po zatwierdzenie formularza jesteśmy przekierowani do 
 trzeciej strony gdzie będzie wyswietlone wybrane województwo i miasta.
 Na trzeciej stronie możliwośći powrotu do strony startowej.
 Po zatwierdzeniu-->