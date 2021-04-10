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
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $email = $_POST['email1'];
        $pass = $_POST['pass1'];
        $birthday = $_POST['birthday'];
        $city = $_POST['city'];
        $nationality = $_POST['nationality'];
        //echo $name, $surname, $email, $pass ,$city, $birthday, $city;
        $pass = password_hash($pass, PASSWORD_ARGON2ID);
        
        $avatar = ($gender == "f") ? './img/woman.png' : './img/man.png';
        
        /*
        switch ($gender) {
            case 'm':
                $avatar = './img/man.png';
                break;
            case 'f':
                $avatar = './img/woman.png';
                break;
            }
        */ 

        //old(SQL Injection)
        /*
        $sql = "INSERT INTO `customers` (`id`, `cities_id`, `name`, `surname`, `birthday`, `height`, `create_date`) VALUES (NULL, `2`, `new1`, `Nowak`, `2020-10-10`, `185.50`, CURRENT_TIMESTAMP())";

        $connect ->query($sql);
        echo $connect->affected_rows;
        echo $name;
        */

        //new 
        $sql = "INSERT INTO `customers` (`cities_id`, `nationality_id`, `name`, `surname`, `gender`,  `email`, `pass`, `birthday`, `avatar`) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("sssssssss", $city, $nationality, $name, $surname, $gender, $email, $pass, $birthday, $avatar);
        
        if ($stmt->execute()) {
            //header("location: ../index.php?register=success&email=$email");
            
            // zgody marketingowe
            if (count($_SESSION['marketing']) > 0) {
                $user_id = $connect->insert_id;
                foreach ($_SESSION['marketing'] as $key=>$value){
                    if (isset($_POST["marketing$value"])){
                        //echo 'Zaznaczyłeś id=', $value,'<br>';
                        
                        //echo 'Dodany user o id',$connect->insert_id;
                        $sql = "INSERT INTO `customer_marketing` (`customers_id`, `marketing_id`) VALUES (?,?)";
                        
                        $stmt = $connect->prepare($sql);
                        $stmt->bind_param("ss", $user_id, $value);
                        $stmt->execute();
                    }
                }
            }

           // if ($stmt->execute()) {
                header("location: ../index.php?register=success&email=$email");
                $connect->close();
                exit();
            

            //header("location: ../index.php?register=success&email=$email");

            //echo 'Dodany user o id= ',$connect->insert_id;
        }else{
            //echo $connect->error;
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