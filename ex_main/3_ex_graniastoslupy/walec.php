<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Walec</title>
</head>
<body>
  <h4>Walec</h4>
  <img src="./img/walec.png" alt="walec"><hr>
  <h4>Dane</h4>
  <form method="post">
    <input type="number" name="r" placeholder="r"
      <?php 
        if (isset($_POST['r'])) {
          echo "value=\"$_POST[r]\"";
        }
      ?>
    ><br><br>
    <input type="number" name="h" placeholder="h"
    <?php 
        if (isset($_POST['h'])) {
          echo "value=\"$_POST[h]\"";
        }
      ?>
    ><br><br>
    <input type="submit" value="Oblicz">
  </form>
  <?php 


if (!empty($_POST['r']) && !empty($_POST['h'])) {
 
    if($_POST['r'] <= 0 || $_POST['h'] <= 0){
      echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
    }else{
            require_once './scripts/walec.php';
            echo '<ul>';
              echo '<li>Pole podstawy: ',number_format(polepodst($_POST['r']), 2),'cm<sup>2</sup></li>';
              echo '<li>Pole powierzchni bocznej: ',number_format(polepowb($_POST['r'],$_POST['h']), 2),'cm<sup>2</sup></li>';
              echo '<li>Pole powierzchni całkowitej: ',number_format(polepowcalk($_POST['r'],$_POST['h']), 2), 'cm<sup>2</sup></li>';
              echo '<li>Objętość: ',number_format(objetosc($_POST['r'],$_POST['h']), 2), 'cm<sup>3</sup></li>';
            echo '<ul>';
          }
    
    }else{
      if (isset($_POST['r']) && isset($_POST['h'])) {
        if ($_POST['r'] === '0' || $_POST['h'] === '0') {
          echo '<h4>Dane w formularzu nie mogą być 0!</h4>';
        }else{
          echo '<h4>Dane w formularzu nie mogą być puste!</h4>';
        }
      }
    }
?>

   <br><br><a href="./graniastoslupy.php">Strona główna</a>
    
  
</body>
</html>