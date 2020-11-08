<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sześcian</title>
</head>
<body>
  <h4>Sześcian</h4>
  <img src="./szescian.png" alt="szescian"><hr>
  <h4>Dane</h4>
  <form method="post">
    <input type="number" name="a" placeholder="a"
      <?php 
        if (isset($_POST['a'])) {
          echo "value=\"$_POST[a]\"";
        }
      ?>
    ><br><br>
    <input type="submit" value="Oblicz">
  </form>
  <?php 


if (!empty($_POST['a'])) {
 
    if($_POST['a'] <= 0){
      echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
    }else{
            require_once './scripts/szescian.php';
            echo '<ul>';
              echo '<li>Pole: ',pole($_POST['a']),'cm<sup>2</sup></li>';
              echo '<li>Objętość: ',objetosc($_POST['a']),'cm<sup>3</sup></li>';
              echo '<li>Długość przekątnej: ',przekatna($_POST['a']),'cm</li>';
              echo '<li>Promień kuli wpisanej w sześcian: ', promkulw($_POST['a']),'cm</li>';             
              echo '<li>Promień kuli opisanej na sześcianie: ', promkulna($_POST['a']),'cm</li>';
            echo '<ul>';
          }
    
    }else{
      if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        if ($_POST['a'] === '0' || $_POST['b'] === '0' || $_POST['c'] === '0') {
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