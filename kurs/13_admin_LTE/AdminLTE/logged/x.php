<?php
    session_start();
    foreach ($_SESSION['logged']['email'] as $value) {
        echo $value;
    }
    //echo $_SESSION['logged']['email'];
?>