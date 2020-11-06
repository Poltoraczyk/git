<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
</head>
<body>
    <?php
      $a = $_POST['a'];
      $b = $_POST['b'];
      $pomiar = $_POST['pomiar'];

      $_SESSION['a'] = "$a";
      $_SESSION['b'] = "$b";
      $_SESSION['pomiar'] = "$pomiar";

      $pole = $a * $b;
      $obwod = ($a + $b) * 2;

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
        } 
    ?>
         <form name="form1" action="./1_homework_calc.php"  method="post">
            <input type="submit" value="Pokaż obliczenia">
         </form>
</body>
</html>