<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name"><br><br>
        <input type="text" name="surname"><br><br>
        <input type="submit" name="button" value="wyślij">
    </form>
    <?php
    if (isset($_POST['button'])) {
        if (!empty($_POST['name']) && !empty($_POST['surname'])) {
            include './2_function.php';
            echo '<hr>', data($_POST['name'], $_POST['surname']);

        }else{
        echo '<hr>wypelnij wszystkie pola';
        }
    }
    ?>
</body>
</html>