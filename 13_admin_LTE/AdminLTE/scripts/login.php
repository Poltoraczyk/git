<?php
session_start();

    foreach ($_POST as $value){
        if (empty($value)) {
            $_SESSION['error'] = 'Wypełnij wszystkie pola!';
            ?>
            <script>
                history.back();
            </script>
            <?php
            exit();
        }       

    }

    require_once "./connect.php";
    $email = $_POST['email'];
    //echo $email;
    /*
    $sql = "SELECT `email` `pass` FROM `customers` WHERE `email`=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("s", $email);
    */
    //print_r($_POST);

    $sql = "SELECT email, pass, name, surname, permission_id, avatar FROM `customers` WHERE `email`=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("s", $email);
    
    
    // $result = $stmt->get_result();
    //$customer = $result->fetch_assoc();

    
    

    if ($result = $stmt->execute()){
        $error=0;
        $stmt->store_result();
        
        if ($stmt->num_rows) {
            //echo 'Ilość rekordów: ',$stmt->num_rows;

            $stmt->execute();
            $result = $stmt->get_result();
            $customer = $result->fetch_assoc();
            // echo $customer['email'], $customer['pass'];
            
            if(password_verify($_POST['pass'], $customer['pass'])){
            $_SESSION['logged']['email'] = $customer['email'];
            $_SESSION['logged']['name'] = $customer['name'];
            $_SESSION['logged']['surname'] = $customer['surname'];
            $_SESSION['logged']['permission_id'] = $customer['permission_id'];
            $_SESSION['logged']['avatar'] = $customer['avatar'];
            session_regenerate_id();
            $_SESSION['logged']['session_id'] = session_id();
            //header('location: ../logged/x.php');
            header('location: ../logged/logged.php');
            }else{
               $error = 1;
            }
        }else{
            $error = 1;
        }
        
        if ($error != 0) {
            $_SESSION['error'] = 'Błędny login lub hasło';
            ?>
            <script>
                history.back();
            </script>
            <?php
            exit();
        }
    }
    




?>