<?php
    abstract class Person{
        public function speak(){
            return "Osoba mówi";
        }
    }

    class Child extends Person{
        public function speak(){
            return "Dziecko mówi";
        }
        public function speakPerson(){
            return parent::speak();
        }
    }
    
    $person = new Child();
    echo $person->speak();
    echo $person->speakPerson();
?>