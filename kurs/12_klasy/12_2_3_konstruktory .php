<?php
    //konstruktory z klasy bazowej i potomnej

    class ClassA{
        public function __construct(){
            echo "Konstruktor z klasy bazowej: ClassA<br>";
        }

    }

    class ClassB extends ClassA{
        public function __construct(){
            parent::__construct();
            echo "Konstruktor z klasy potomnej: ClassB<br>";
        }
    }

    //$objA =new ClassA();

    $objB =new ClassB("d");

?>