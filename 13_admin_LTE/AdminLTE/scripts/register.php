<?php
    session_start();
    //print_r($_POST);
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $_SESSION['error'] = 'Wypełnij wszystkie dane!';
            ?>
            <script>
                history.back();
            </script>
            <?php
            exit();
        }       
        //echo "$value";
    }

    if (!isset($_POST['terms'])) {
        $_SESSION['error'] = 'Zaznacz pole z regulaminem!';
        ?>
            <script>
                history.back();
            </script>
        <?php
            exit();
    }

    if ($_POST['email1'] != $_POST['email2']) {
        $_SESSION['error'] = 'Pola email są różne!';
        ?>
            <script>
                history.back();
            </script>
        <?php
        exit();
    }    
    
    if ($_POST['pass1'] != $_POST['pass2']) {
        $_SESSION['error'] = 'Pola z hasłem są różne!';
        ?>
            <script>
                history.back();
            </script>
        <?php
        exit();
    }
          
    require_once('./connect.php');
    if (!$connect->connect_errno) {
        $name= $_POST['name'];
        $surname= $_POST['surname'];
        $email= $_POST['email1'];
        $pass= $_POST['pass1'];
        $city= $_POST['city'];
        $birthday = $_POST['birthday'];
        echo $name, $surname, $email, $pass ,$city, $birthday, $city;
        $pass = password_hash($pass, PASSWORD_ARGON2ID);

        //old(SQL Injection)
        /*
        $sql = "INSERT INTO `customers` (`id`, `cities_id`, `name`, `surname`, `birthday`, `height`, `create_date`) VALUES (NULL, `2`, `new1`, `Nowak`, `2020-10-10`, `185.50`, CURRENT_TIMESTAMP())";

        $connect ->query($sql);
        echo $connect->affected_rows;
        echo $name;
        */

        //new
        $sql = "INSERT INTO `customers` (`cities_id`, `name`, `surname`, `email`, `pass`, `birthday`) VALUES (?,?,?,?,?,?)";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("ssssss", $city, $name, $surname, $email, $pass, $birthday);
        if ($stmt->execute()) {
            header("location: ../index.php?register=success&email=$email");
            exit();
        }else{
            echo $connect->error;
            $_SESSION['error'] = "Nie dodano nowego użytkownika:<br>".$connect->error;
            ?>
                <script>
                    history.back();
                </script>
            <?php
            exit();
        }
    }else{
        $_SESSION['error'] = "Błędne połączenie z bazą danych<br>Error: '".$connect->connect_errno;
        header('location: ../pages/register.php');
    }
?>