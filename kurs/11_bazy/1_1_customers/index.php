<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klienci</title>
</head>
<body>
    <h1>Lista klientów</h1>
<?php
    //połączenie z bazą danych
    $servername= "localhost";
    $username = "root";
    $password = "";
    $db = "teb1";

    $connect =  mysqli_connect($servername, $username, $password, $db);

    $sql = "SELECT * FROM customers";

    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()){
        echo <<<ROW
        Imię: $row[name] <br>Nazwisko: $row[surname] <br>Data urodzenia: $row[birthday] <br>Wzrost: $row[height]
        <hr>
ROW;
    }
    $connect->close();


?>
</body>
</html> 