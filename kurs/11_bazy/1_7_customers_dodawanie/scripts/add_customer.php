<?php
    require_once('../scripts/connect.php');
    // print_r($_POST);
    //echo $_POST['name'];

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $height = $_POST['height'];
    $city_id = $_POST['city_id'];

    $sql = "INSERT INTO `customers` (`id`,`cities_id`,`name`,`surname`,`birthday`,`height`) VALUES (NULL, '$city_id', '$name', '$surname', '$birthday', '$height')";
    header("location: ../site/klient.php");

    $connect->query($sql);
    $result = $connect->affected_rows;
    //echo $result;

    $connect->close();
    header("location: ../site/klient.php?add_user=$result&name=$name&surname=$surname");
?>