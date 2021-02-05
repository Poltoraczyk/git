<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Województwa</title>
</head>
<body>
  <h1>Województwa</h1>
  <?php 
    require_once('../scripts/connect.php');
    
    $sql = "SELECT state FROM `states` ORDER BY state";

    $result = $connect->query($sql);
    echo "<table>";
    echo "<tr>
      <th>Województwo</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
      echo <<<ROW
      <tr>
        <td>$row[state]</td> 
      </tr>
      ROW;
    }
    echo "</table>";
    $connect->close();
    
    
    
  ?>
</body>
</html>