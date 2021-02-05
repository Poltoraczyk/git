<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Miasta</title>
</head>
<body>
  <h1>Miasta</h1>
  <?php 
    require_once('../scripts/connect.php');
    
    $sql = "SELECT cities.city, states.state FROM `cities` INNER JOIN states ON cities.states_id=states.id ORDER BY state";

    $result = $connect->query($sql);
    echo "<table>";
    echo "<tr>
      <th>Miasto</th>
      <th>Województwo</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
      echo <<<ROW
      <tr>
        <td>$row[city]</td> 
        <td>$row[state]</td> 
      </tr>
      ROW;
    }
    echo "</table>";
    $connect->close();
    
    
    
  ?>
</body>
</html>