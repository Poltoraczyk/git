<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1_hwstyle.css">
    <title>Wynik</title>
</head>
<body>
    <?php

    if ($_POST['a'] <= 0 || $_POST['b'] <= 0) {
        ?>
            <script>
                history.back();
            </script>
        <?php
    }else{
      $a = $_POST['a'];
      $b = $_POST['b'];
      $pomiar = $_POST['pomiar'];

      $_SESSION['a'] = "$a";
      $_SESSION['b'] = "$b";
      $_SESSION['pomiar'] = "$pomiar";

      $pole = $a * $b;
      $obwod = ($a + $b) * 2;
      $error = 0;
/*
        if (!empty($_POST['a']) && !empty($_POST['b']) && ($_POST['pomiar']) == "pole") {
            echo "Pole wynosi $pole cm<sup>2</sup>.";
        }elseif (!empty($_POST['a']) && !empty($_POST['b']) && ($_POST['pomiar']) == "obwod") {
            echo "Obwód wynosi $obwod cm.";
        }else {
            ?>
                <script>
                history.back();
                </script>
            <?php
*/
    if (!empty($_POST['a']) && !empty($_POST['b'])) {     
        switch ($pomiar) {
            case 'pole':
              echo "Pole wynosi $pole cm<sup>2</sup>.";
                break;
            case 'obwod':
              echo "Obwód wynosi $obwod cm.";
                break;   
            
            default:
              $error = 1;
                break;
        }
             
    }else {
        echo "error";
       $error = 1;
        }
    if ($error == 1) {
        ?>
                <script>
                    history.back();
                </script>
        <?php
        }
    }
        ?>
        
         <form name="form1" action="./1_homework_calc.php"  method="post">
            <input type="submit" value="Pokaż obliczenia">
         </form> 
        
</body>
</html>