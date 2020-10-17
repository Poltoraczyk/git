<?php
$name = "Jan"
echo 'text';
echo "text<br>";
echo 'Imie: $name<br>;
echo "Imie: $name";

//konkatencja
$name = 'Jan'.'Kowalski";
    echo "imie" : $name "." <br>";

//dodawanie
    $add = 2 + 3
    echo "$add<br>";

//typy danych
//boolean

$prawda = true;
echo $prawda; //true wyswietli 1

$fałsz = false;
echo "$fałsz<br>"; // false nic nie wyswietli

//integer
    $bin = 0b1101; //13
    $oct = 01101; //577
    $dec = 13; //13
    $hex = 0xA1; //161
    //interpolacja
    echo
    echo $hex, '<hr>';

    echo 'a'.'b'.'c'; //wolniejszy sposob od interpolacji
    // a suma b suma c => wyswietli abc
    echo 'a','b','c'; // => wyswietl a wyswietl b wyswietl c

//skladnia heredoc
$name = "Anna";
echo <<<LABEL
    <br>Imię: $name<br>
    Twoje dane: $surname
    <hr>
LABEL;

/*
Nowy heredoc z etykieta DANE

Dane uzytkownika (podkreslony tekst)
Imie i nazwisko: ..... 
Miejscowosc: ....
Miejsce urodzenia: ... 

*/

 $name = 'Krystyna';
 $surname = 'Nowak';
 $city = 'Poznań';
 echo <<<DANE
 <hr>
 Dane użytkownika:<br>
 Imie i nazwisko: $name $surname<br>
 