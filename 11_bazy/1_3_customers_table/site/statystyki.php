<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Klienci</title>
</head>
<body>
  <h1>Klienci</h1>
  <?php 
    require_once('../scripts/connect.php');
    require_once('../scripts/function.php');

    //ilość osób
    echo "<h3> Ilość osób</h3>";
    ?>
      <form method="get">
        <input type="number" name="limit"><br><br>
        <input type="submit" name="button"><hr>
      </form>
    <?php
    //pobranie ilosci osob z formularza
    /*
    if (!empty($_GET['limit'])) {
      $limit = $_GET['limit'];
    }else{
      $limit=3;
    }
    */

    !empty($_GET['limit']) ? $limit = $_GET['limit'] : $limit = 3;

    //wzrost
    $sql = "SELECT customers.name,customers.surname,customers.birthday,customers.height, cities.city FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id WHERE height IS NOT NULL ORDER BY height DESC LIMIT $limit";

    $result = $connect->query($sql);
    echo "<h3>Wzrost - 3 najwyzsze osoby</h3>";
    echo "<ol>";
    while ($row = $result->fetch_assoc()) {
      echo <<<ROW
      <li>$row[name]
        $row[surname]
        $row[height]
      </li>
      ROW;
    }
    echo "</ol>";

    // data urodzenia, najstarsze osoby
    //$sql = "SELECT customers.name,customers.surname,customers.birthday,customers.height, cities.city FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id WHERE birthday IS NOT NULL ORDER BY birthday LIMIT 3";

    $sql = "SELECT customers.name,customers.surname, customers.birthday, year(customers.birthday) AS rok FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id WHERE birthday IS NOT NULL ORDER BY birthday LIMIT $limit";

    $result = $connect->query($sql);
    echo "<h3>Wiek - 3 najstarsze osoby</h3>";
    echo "<ol>";
    while ($row = $result->fetch_assoc()) {
     // $year = year($row['birthday']);
      echo <<<ROW
      <li>$row[name] $row[surname],
      data urodzenia: $row[birthday],
      rok urodzenia: $row[rok]
      </li>
      ROW;
    }
    echo "</ol>";
    $connect->close();
    
    
    
  ?>
</body>
</html>
