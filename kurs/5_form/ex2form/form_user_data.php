<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyświetlamy dane</title>
</head>
<body>
    
    <?php
    $error = 0;
      if (!empty($_POST['city'])) {
          switch ($_POST['color']) {
              case 'r':
                 $color = "Czerwony";
                  break;
              case 'g':
                 $color = "Zielony";
                  break;
              case 'b':
                 $color = "Niebieski";
                  break;
              
              default:
                  $error = 1;
                  break;
          }

          echo "<h4>Dane z formularza</h4>";
          echo "Miasto: $_POST[city]<br>Kolor:$color";
      }else{
          $error = 1;
      }
      if ($error == 1) {
      ?>
        <script>
            history.back();
        </script>
      <?php
      }

    
    ?>
</body>
</html>