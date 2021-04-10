<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__person</title>
</head>
<body>
<?php
    require_once('./Person.php');
    
    $obj = new Person("Janusz","Nowak");

    $obj->getAll();
?>
</body>
</html>