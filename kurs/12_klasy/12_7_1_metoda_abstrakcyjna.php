<?php
    abstract class Person{
        abstract public function getName();
    }

    class Child extends Person{
        public function getName(){
            return "Imię dziecka";
        }
        
        public function go(){
            return "Dziecko idzie";
        }
    }

    //echo (new Child())->go();
    //echo Child::go(); //należy dodać static przed metodą

    $obj = new Child();
    echo $obj->getName();

?>