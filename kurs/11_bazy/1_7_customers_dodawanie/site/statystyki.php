<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
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
    
    //$_SESSION['limit'] = 3;
    //pobranie ilosci osob z formularza

    if (!empty($_GET['limit'])) {
      $_SESSION['limit'] = $_GET['limit'];
    }else if(empty($_GET['limit']) && !isset($_SESSION['limit'])){
      $_SESSION['limit']=3;
    }
  

    //!empty($_GET['limit']) ? $limit = $_GET['limit'] : $limit = 3;

    //sortowanie wzrostu
    echo $_SESSION['limit'];
    if(isset($_GET['sortHeight'])){
        $sortHeight = $_GET['sortHeight'];
        $sortHeight == 'asc' ? $sort = 'najniższe' : $sort = 'najwyższe';
    }else{
        $sortHeight = 'desc';
        $sort = 'najwyższe';
    }

    //sortowanie wieku
    if(isset($_GET['sortBirthday'])){
      $sortBirthday = $_GET['sortBirthday'];
    }else{
      $sortBirthday = 'desc';
   }

    //wzrost
    $sql = "SELECT customers.name,customers.surname,customers.birthday,customers.height, cities.city FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id WHERE height IS NOT NULL ORDER BY height $sortHeight LIMIT $_SESSION[limit]";

    $result = $connect->query($sql);
    

    echo "<h3>Wzrost - 3 najwyzsze osoby <a href=\"?sortHeight=desc\"><ion-icon name=\"arrow-down-outline\"></ion-icon></a><a href=\"?sortHeight=asc\"><ion-icon name=\"arrow-up-outline\"></ion-icon></a></h3>";
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

    $sql = "SELECT customers.name,customers.surname, customers.birthday, year(customers.birthday) AS rok FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id WHERE birthday IS NOT NULL ORDER BY birthday $sortBirthday LIMIT $_SESSION[limit]";

    $result = $connect->query($sql);
    echo "<h3>Wiek - 3 najstarsze osoby<a href=\"?sortBirthday=desc\"><ion-icon name=\"arrow-down-outline\"></ion-icon></a><a href=\"?sortBirthday=asc\"><ion-icon name=\"arrow-up-outline\"></ion-icon></a></h3>";
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
