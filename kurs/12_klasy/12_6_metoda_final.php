<?php
    class Animal{
        final public function go(){
            echo "Zwierzę idzie";
        }
    }

    class Mammal extends Animal{
       // public function go(){
        //    echo "Ssak idzie";
       // }
    }

    $dog = new Mammal();
    $dog->go();
?>