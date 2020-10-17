<?php
    $text = <<<T
    Teb - kurs
    programowania<br>
T;

    echo "$text<br>";
    echo nl2br($text);

    $name = 'jANusZ';
    echo "$name<br>";



// zamaiana na male litery
    echo strtolower($name),'<br>';

// zamaiana na duze litery
    echo strtoupper($name),'<br>';

// zamaiana pierwszej litery na duza a pozostaych na male
    echo ucfirst(strtolower($name)),'<br>';

    $name = "jAnUSz kOwAlSKi";
    echo ucwords(strtolower($name)),'<br>';

// LOREM IPSUM
    $lorem = <<<LOREM
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at quam in nunc dapibus ultrices ut non ipsum. Vestibulum malesuada nisl quis mauris pharetra, vitae eleifend arcu aliquet. Etiam venenatis quis tellus quis varius. Nam sit amet mi vulputate, ultrices tellus non, rhoncus dui. Phasellus bibendum iaculis malesuada. Nullam dapibus metus dui, non euismod metus ultrices sed. Nullam at felis vitae dui facilisis luctus. Sed dignissim felis magna, eget iaculis dolor sodales id. Integer ornare velit lobortis ante dictum consectetur. Integer sed risus est. Nullam ut fringilla erat, ac egestas neque. Integer tristique lacus eget nibh luctus viverra. Mauris convallis augue id felis mattis eleifend.<br>
LOREM;

    echo $lorem,'<br>';
    echo wordwrap($lorem, 40, '<br>');
    echo wordwrap($lorem, 40, '<hr>');


// czyszczenie zawartosci bufora
    ob_clean();

//białe znaki
    $name = 'Anna';
    $name1 = '  Anna   ';

    echo 'Dłogość $name: ', strlen($name);
    echo '<br>Dłogość $name1:', strlen($name1);

//wyczysc zmienna $name1 z bialych znaków
    
echo strlen(ltrim($name1)); //5
echo strlen(rtrim($name1)); //6
echo strlen(trim($name1)),'<hr>'; //4

//przeszukiwanie ciagów znakó
    $address = 'Poznań, ul. Rynek Jeżycki 1, tel .(61) 123-45-67';
    echo $search = strstr($address, 'tel'),'<br>'; 
    
    $address = 'Poznań, ul. Rynek Jeżycki 1, tel .(61) 123-45-67';
    echo $search = strstr($address, 'tel', true),'<br>';
    
    $address = 'Poznań, ul. Rynek Jeżycki 1, tel .(61) 123-45-67';
    echo $search = stristr($address, 'tel',),'<br>';

    $mail = strstr('janusz@gmail.com', '@');
    echo "$mail<br>";

    $mail = strstr('janusz@gmail.com', 64);
    echo "$mail<br>";

//substr
    echo substr('Janusz Kowalski', 7, 5);
    echo strlen(substr('Janusz Kowalski', 7, 5));
    ob_clean();

//zamiana ciągów
    $replace = str_replace('%korona%', 'grypa', '%korona% jest niebezpieczna');
    echo $replace,'<br>';

//usuń z loginu polskie znaki
    $login = 'bączek';
    $censure = array('ą','ę','ń','ś','ł','ó','ć','ż');
    $replace = array('a','e','n','s','l','o','c','z');
    echo str_replace($censure,$replace,$login);
    // Janowe pozdrowienia!!!
    // Jan coś pisze!!!!
?>