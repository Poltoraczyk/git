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
    if (isset($_GET['customers_delete'])) {
      if ($_GET['customers_delete'] == 0 || $_GET['customers_delete'] == -1) {
        echo "Nie usunięto klienta!";
      }else if($_GET['customers_delete'] == 1){
        echo 'Prawidłowo usunięto jednego klienta!';
      }else{
        echo "Usunięto $_GET[customers_delete] klientów";
      }
    }
    require_once('../scripts/connect.php');
    
    $sql = "SELECT customers.id, customers.name,customers.surname,customers.birthday,customers.height, cities.city FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id ORDER BY surname";

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
        <td><a href="../scripts/delete_customers.php?id=$row[id]"><ion-icon name="trash-outline"></ion-icon></a></td>
      </tr>
      ROW;
    }
    echo "</table>";
    $connect->close();
    
    
    
  ?>
</body>
</html>