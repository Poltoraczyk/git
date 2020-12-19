<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tabela.css">
    <title>Tabela</title>
</head>
<body>
    Ilość wierszy: <?php 
    if (empty($_GET['row'])) {
        $row=0;
    }else{
         $row = $_GET['row'];
    }
    echo $row;
    ?><br><br>
    
    Ilość kolumn: <?php   
    if (empty($_GET['col'])) {
        $col=0;
    }else{
         $col = $_GET['col'];
    }
    echo $col;
    ?><br><br>

    <table>
    <!-- nagłowki tabeli <th -->
    <?php
        echo '<tr><td></td>';
        for ($i=1; $i <= $col ; $i++) { 
            echo "<th>Kolumna $i</th>";
        }
       echo '</tr>';
        $count=0;
         for ($i=1; $i <= $row; $i++) {
             echo "<tr><th>Wiersz $i</th>";
             for ($j=1; $j <= $col; $j++) { 
                 $count++;
                echo '<td>', $count, '</td>';
                }
            echo '<tr>';
         }
        ?>
    </table>
</body>
</html>