<?php
  session_start();
 // $_SESSION['a'] = $_GET['a'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $_SESSION['a'] = $_GET['a'];
  $poziom = 1;
    while ($poziom <= $_SESSION['a']) {
      $pion = 1;

        while ($pion <= $_SESSION['a']) {
          echo $poziom * $pion . ' ' ;
            $pion++;
  }
    echo "<br/>";
    $poziom++;
}

?>
  
</body>
</html>
