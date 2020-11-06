<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $name = $_GET['name'];
        echo "Imię: $name<br>";

        echo "<a href=\"./1.php?name=$_GET[name]\">Popraw dane w formularzu</a>";

    $city = $_GET['city'];
        echo "Imię: $city<br>";

        echo "<a href=\"./1.php?city=$_GET[city]\">Popraw dane w formularzu</a>";
        
    $age = $_GET['age'];
        echo "Imię: $age<br>";

        echo "<a href=\"./1.php?age=$_GET[age]\">Popraw dane w formularzu</a>"
    ?>
</body>
</html> 