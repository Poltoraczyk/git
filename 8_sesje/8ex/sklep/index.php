<?php
    session_start();
    $_SESSION['price']['mouse'] = 35.99;
    $_SESSION['price']['keyboard'] = 100.50;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep</title>
</head>
<body>
    <h1>Produkty</h1>
    <table>
      <tr>
        <th>Lp.</th>
        <th>Nazwa</th>
        <th>Cena</th>
      </tr>      
      <tr>
        <td>1</td>
        <td>Mysz</td>
        <td>35.99zł</td>
      </tr>      
      <tr>
        <td>2</td>
        <td>Klawiatura</td>
        <td>100.50zł</td>
      </tr>
    </table>
    <form action="./zakupy.php" method="get">
        <input type="text" name="mouse" placeholder="Mysz"><br><br>
        <input type="text" name="keyboard" placeholder="Klawiatura"><br><br>
        <input type="submit" value="Zatwierdz"><br><br>
    </form>
</body>
</html>