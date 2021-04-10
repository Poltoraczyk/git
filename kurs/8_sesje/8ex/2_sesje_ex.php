<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesja2</title>
</head>
<body>
    <h4>Strona startowa</h4>
    <?php
        
        //session_start(); //przyjęło sie żeby wrzucać na samą górę
        echo "identyfikator sesji", session_id();
        echo '<pre>';
        //print_r($_POST);
        echo '</pre>';


        if(!empty($_POST['wojewodztwa'])){
            $_SESSION['wojewodztwa']=$_POST['wojewodztwa'];
            ?>
            <form action="" method="post">
            <?php
        switch ($_SESSION['wojewodztwa']) {
            case 'wielkopolskie':
                ?>
                    <input type="checkbox" name="poznan" id="">poznan
                    <input type="checkbox" name="srem" id="">srem
                    <input type="checkbox" name="konin" id="">konin
                <?php
                break;
            case 'slaskie':
                ?>
                <input type="checkbox" name="katowice" id="">katowice
                <input type="checkbox" name="czestochowa" id="">czestochowa
                <input type="checkbox" name="sosnowiec" id="">sosnowiec
            <?php
                break;
            case 'malopolskie':
                ?>
                    <input type="checkbox" name="krakow" id="">krakow
                    <input type="checkbox" name="wieliczka" id="">wieliczka
                    <input type="checkbox" name="zakopane" id="">zakopane
                <?php
                break;
            
            default:
                echo "Błędne dane";
                break;
        }
        
        echo "</form>";
    }
        
        
       // $_SESSION['name'] = 'Anna';
        //echo "<hr>Imię: $_SESSION[name]<br>";
        //unset($_SESSION['name']); //unieważnia zmienną sesyjną
        
    ?>
    <a href="./3_sesje_ex.php">Sesje3</a>
</body>
</html>