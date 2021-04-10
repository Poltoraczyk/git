<?php
$count = 5;
$row=1;
    do {
        $col=1;
            do {
                echo $row * $col,' ';
                $col++;
            } while ($col <= $count);
            echo  '<br>';
            $row++;
        } while ($row <= $count);
?>