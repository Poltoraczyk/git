<?php
    class Person{

        public $name;

        function __construct(){
            echo "Konstruktor";
        }

        function __destruct(){
            echo "Destruktor";
            
        }
    }

    $obj = new Person();
    $obj->name = "Janusz";
    echo "<br>",$obj->name,"<br>";
    //exit();
    unset($obj);
    echo "Kod<br>";

?>