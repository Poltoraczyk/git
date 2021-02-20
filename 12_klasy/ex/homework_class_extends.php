<?php
    class Animal{
        public $name;
        public $age;
        
        public function dajGlos(){
            return "Daję głos";
        }
    }

    class Cat extends Animal{
        public function drapMeble(){
            return "Drapie Meble";
        }
    }   
    
    class Dog extends Animal{
        public function gryzKapcie(){
            return "Gryzie Kapcie";
        }
    }    
    
    class NorweskiLesny extends Cat{
        public function gubSiersc(){
            return "Gubi Sierść";
        }
    }
    
    class Pers extends Cat{
        
    }

    class Doberman extends Dog{
        public function gonListonosza(){
            return "Goni Listonosza";
        }
    }    
    
    class Jamnik extends Dog{
        
    }

    $zwierze1 = new NorweskiLesny();
    $zwierze1->name = "Leon";
    echo $zwierze1->name;
    echo $zwierze1->gubSiersc();
    echo $zwierze1->dajGlos();
?>