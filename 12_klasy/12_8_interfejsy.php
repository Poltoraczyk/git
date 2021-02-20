<?php
    interface PersonInterface{
        public function getName();
        public function getSurname();
    }

    interface ChildInterface{
        public function allVaccinations($vaccinations):bool;
    }
    class Person implements PersonInterface{
        public $name;
        public $surname;

        public function __construct($name,$surname){
            $this->name = $name;
            $this->surname = $surname;
        }
        public function getName():string{
            return $this->name;
            
        }
        public function getSurname():string{
            return $this->surname;
        }
    }

    class Child extends Person implements ChildInterface{
        public function allVaccinations($vaccinations):bool{
            //if ($vaccinations == true) {
            //    return "Zaszczepiony";
            //}else{
            //    return "Należy zaszczepić dziecko";
            //}
            //return $vaccinations ? "Zaszczepiony" : "Należy zaszczepić dziecko";
            return $vaccinations ? true : false;
        }    
    }

    $obj = new Person("Janusz","Nowak");
    $obj->name = "Jan";
    echo $obj->getName();
    echo $obj->getSurname(),"<br>";

    $child = new Child("Anna","Nowak");
    $child->name ="Agnieszka";
    echo $child->getName();
    echo $child->getSurname(),"<br>";
    
    echo $child->allVaccinations(true) ? "Dziecko jest zaszczepione" : "Dziecko jest niezaszczepione";

?>