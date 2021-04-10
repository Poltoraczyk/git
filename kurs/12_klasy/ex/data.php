<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
</head>
<body>
<?php
    require_once('../class/User.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $height = $_POST['height'];

    $user1 = new User();
    $user1->setData($name, $surname, $city, $age, $height);
    $user1->getData();
?>
    
</body>
</html>