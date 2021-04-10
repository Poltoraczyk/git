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
    $connect =  mysqli_connect("localhost", "root", "", "teb1");

    //sprawdzenie poprawności połączenia z db
    //echo $connect->connect_errno;

    $sql = "SELECT name FROM customers";

    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()){
        //print_r($row);
        echo $row['name'],'<br>';
    }
    $connect->close();

    
?>
</body>
</html> 