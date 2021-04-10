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
    
    if (isset($_GET['add_user'])) {
      if ($_GET['add_user'] == 1) {
        echo "<h4>Prawidłowo dodano użytkownika o nazwie: $_GET[name] $_GET[surname]</h4>";
      }else{
        echo "<h4>Nie dodano nowego użytkownika</h4>";
      }
    }
  

    require_once('../scripts/connect.php');
    
    $sql = "SELECT customers.name,customers.surname,customers.birthday,customers.height, cities.city FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id ORDER BY surname";

    $result = $connect->query($sql);
    echo "<table>";
    echo "<tr>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data urodzenia</th>
      <th>Wzrost</th>
      <th>Miasto</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
      echo <<<ROW
      <tr>
        <td>$row[name]</td> 
        <td>$row[surname]</td> 
        <td>$row[birthday]</td> 
        <td>$row[height]</td> 
        <td>$row[city]</td> 
      </tr>
      ROW;
    }
    echo "</table>";
    $connect->close();
    
    
    
  ?>
</body>
</html>