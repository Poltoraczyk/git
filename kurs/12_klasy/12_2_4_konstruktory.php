<?php
    class A{
        public $name;
        
        public function __construct($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

    class B extends A{
        public $surname;

        public function __construct($name, $surname){
            $this->surname = $surname;
            parent::__construct($name);
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getData(){
            echo <<<DATA
                Imię: {$this->getName()}
                Imię i nazwisko: $this->name {$this->getSurname()}
DATA;
        }
    }

    //$objA = new A("Janusz");

    $objB = new B("Katarzyna", "Nowak");
    echo $objB->getName(),"<br>";
    echo $objB->getSurname(),"<br>";
    echo $objB->getData(),"<br>";
?>

