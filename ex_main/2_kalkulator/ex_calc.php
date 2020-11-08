<?php
    session_start();
    if (!isset($_SESSION['result'])){
        $_SESSION['result'] = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form method="get">
        <input type="number" name="x" palceholder="x">
        <select name="dzialanie">
        <option value="dodawanie">+</option>
        <option value="odejmowanie">-</option>
        <option value="mnozenie">*</option>
        <option value="dzielenie">/</option>
        </select>
        <input type="number" name="y" palceholder="y">
        <input type="submit" name="submit" value="=">
        <input type="text" name="wynik" id="wynik" value="<?php echo ($_SESSION['result']); ?>" disabled>
    </form>
<?php
    if (isset($_GET['submit'])) {
            if (!empty($_GET['x']) && !empty($_GET['y'])) {
                include './ex_calc_function.php';
                switch ($_GET['dzialanie']) {
                    case 'dodawanie':
                        $_SESSION['result'] = add($_GET['x'], $_GET['y']);
                        break;
                    case 'odejmowanie':
                        $_SESSION['result'] = sub($_GET['x'], $_GET['y']);
                        break;
                    case 'mnozenie':
                        $_SESSION['result'] = multi($_GET['x'], $_GET['y']);
                        break;
                    case 'dzielenie':
                        $_SESSION['result'] = div($_GET['x'], $_GET['y']);
                        break;
                    default:
                        echo 'Wybierz działanie';
                        exit();
                    break;
               
                }
            }
            if ($_GET['y'] == "0") {
?>
<script>
    alert("NIE MOŻNA DZIELIĆ PRZEZ 0");
</script>
<?php
             }else{
            //print_r($_GET);
            //echo gettype($_GET['y']);}
        }else{
            echo '<hr>Wypełnij wszystkie pola!';
        }
        ?>
            <script>
                document.getElementById('wynik').value = <?php echo($_SESSION['result']); ?>;
            </script>
        <?php
?>
</body>
</html>