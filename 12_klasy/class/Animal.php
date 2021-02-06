<?php
class Animal{
        public $mass;
        public $age;

        public function look(){
            return "Zwierzę patrzy";
        }        
        
        public function breathes(){
            return "Zwierzę oddycha";
        }
    }

    class Fish extends Animal{
        public function swims(){
            return "Ryba pływa";
        }
    }    
    
    class Mammal extends Animal{
        public function run(){
            return "Ssak biegnie";
        }
    }    
    
    class Bird extends Animal{
        public function fly(){
            return "Ptak lata";
        }
    }

    class Dog extends Mammal{
        public $breed;
        public $coatColor;

        public function bark(){
            return "Pies szczeka";
        }        
        
        public function fetch(){
            return "Pies aportuje";
        }
        public function getDog(){
            echo <<<SHOW
                <br>Burek ma $this->age lat.<br>
                Waży: $this->mass kg<br>
                Rasa: $this->breed<br>
                Kolor sierśći: $this->coatColor<br>
SHOW;
        }
    }
?>