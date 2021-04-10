<?php 
  // połączenie z bazą danych
    $servername = "localhost";
    $username = "teb_baza";
    $password = "WB5bBPFolhSnLQUO";
    $db = "teb1";

    //@ w php 7 dziala absolutnie w 8 juz nie
    $connect = @new mysqli($servername, $username, $password, $db);

    if ($connect->connect_errno) {
      echo "Numer błedu: ", $connect->connect_errno,'<hr>';
    }
    

    /*
      1045 - użytkownik
      1045 - hasło
      1049 - baza danych
      2002 - serwer
    */
?>