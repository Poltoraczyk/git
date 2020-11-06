<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
    <h4>Wpisz wartości boku a i b</h4>
    <form name="form1" action="./1_homework_data.php" method="post">

        <input type="text"  size=2 name="a" placeholder="bok a"><br><br>
        <input type="text"  size=2 name="b" placeholder="bok b"><br><br>
        <input type="radio" name="pomiar" value="pole" checked>Pole<br><br>
        <input type="radio" name="pomiar" value="obwod" >Obwód<br><br>
        <input type="submit" size=5 name="wynik" value="WYNIK"><br><br>
    </form>
</body>
</html>