<?php
    class Person{
        public $name;
        public $surname;
        public $city;
        public int $age = 20;
        public $nationality = "Polska";
        
        function __construct(string $name,string $surname,string $city){
            $this->name = $name;
            $this->surname = $surname;
            $this->city = $city;
        }

        public function getAll(){
            echo <<<SHOW
            Imię: $this->name<br>
            Nazwisko: $this->surname<br>
            Miasto: $this->city<br>
            Wiek: $this->age lat<br>
            Narodowość: $this->nationality
            <hr>
SHOW;
        }
    }

    $person1 = new Person("Jan", "Nowak","Poznań");

    $person1->age = 20;
    
    $person1->getAll();

    echo gettype($person1->name); //string
    echo gettype($person1->age); //integer
?>