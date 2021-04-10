<?php
    require_once('../scripts/connect.php');
    if (isset($_GET['id'])){
        $sql = "DELETE FROM `customers` WHERE `customers`.`id` = $_GET[id]";
        $connect->query($sql);
        //echo $connect->affected_rows;
        if ($connect->affected_rows) {
            $count = $connect->affected_rows;
            header("location: ../site/klient_usuwanie.php?customers_delete=$count");
            $connect->close();
            exit();
        }else{
            $connect->close();
            header("location: ../site/klient_usuwanie.php?customers_delete=0");
            exit();
        }
    }

    header('location: ../site/klient_usuwanie.php');
?>