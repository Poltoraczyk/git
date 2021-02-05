<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Klienci dodawanie</title>
</head>
<body>
  <h1>Klienci dodawanie</h1>
  <?php 
    require_once('../scripts/connect.php');

    if (!$connect->connect_errno) {
?>
    <form action="../scripts/add_customer.php" method="post">
    <input type="text" name="name" placeholder="Imię"><br><br>
    <input type="text" name="surname" placeholder="Nazwisko"><br><br>
    <select name="city_id">
<?php
    $sql = "SELECT `id`, `city` FROM `cities` ORDER BY city";
    $result = $connect->query($sql);
    while ($city = $result->fetch_assoc()) {
      echo "<option value=\"$city[id]\">$city[city]</option>";

    }
?>
    </select><br><br>
    <input type="date" name="birthday"> Data urodzenia<br><br>
    <input type="number" name="height" placeholder="Wzrost"><br><br>
    <input type="submit" value="Dodaj klienta"> 
    </form>
<?php    
      //$sql = "";
      //$result = $connect->query($sql);
      //$connect->close();

    }else{
      $_SESSION['error'] = 'Awaria bazy danych - spróbuj dodać użytkownika późnniej';
      header('location: ../');
      exit();
    }
    
    
    
  ?>
</body>
</html>