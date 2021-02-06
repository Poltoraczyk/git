<?php
require_once('./class/Animal.php');

    $burek = new Dog();
    echo $burek->bark();
    echo $burek->run();
    echo $burek->look();
    echo $burek->breathes();

    $burek->mass = 15;
    $burek->age = 12;
    $burek->breed = "jamnik";
    $burek->coatColor = "podpalany";

    echo "<br>Burek ma ", $burek->age," lat.<br>Waży: ",$burek->mass," kg.";

    $burek->getDog();
?>