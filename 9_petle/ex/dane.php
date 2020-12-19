<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rodzina</title>
</head>
<body>
  <?php 
    if (isset($_GET['button'])) {
      // średnia wieku członków rodziny
      // pętla i zmienna pomocnicza
      $sum=0;
      $countPerson = count($_GET) -1;
      $count=0;
      // echo $countPerson;
      // $_GET[age$i]

      for ($i=1; $i <= $countPerson; $i++) { 
        // $x = $_GET["age$i"];
        // echo gettype($x); //string
        // echo gettype($avg); //int
        // $avg = $avg + (int)$x;
        if (!empty($_GET["age$i"])) {
          $sum = $sum + (int)$_GET["age$i"];
          $count++;
        }
      }
    $avg = $sum / $count;
      echo "<h3>Średni wiek: $avg lat</h3>";
    }else{
      ?>
      <h1>Ilość członków rodziny: <?php echo $_GET['count']; ?></h1>
  <form method="get">
    <?php 
      for ($i=1; $i <= $_GET['count']; $i++) { 
        echo "<input type=\"number\" name=\"age$i\" placeholder=\"Wiek $i\"><br><br>";
      }
    ?>
    <input type="submit" value="Zatwierdź" name="button">
  </form>
<?php
    }
  ?>
  
</body>
</html>
