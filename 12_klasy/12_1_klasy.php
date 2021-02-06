<?php
    class User{
        public $name; //właściwość
        public $surname; 
        public $city; 
        public $height; 

        public function setName($name){ //metoda
            // $this->name = 'xyz';
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setSurname($surname){
            $this->surname = $surname;
        }
        
        public function getSurname(){
            return $this->surname;
        }
        
        public function setData($name, $surname, $city, $height){
            $this->name = $name;
            $this->surname = $surname;
            $this->city = $city;
            $this->height = $height;
        }       
        
        public function getData(){
            echo <<<SHOW
                <hr>Twoje dane:<br>
                Imię: $this->name<br>
                Nazwisko: $this->surname<br>
                Miasto: $this->city<br>
                Wzrost: $this->height<hr>
SHOW;
        }

    }       
        
    $person1 = new User();
    $person1->name = 'Janusz';
    $person1->surname = 'Nowak';
    
    echo "Imię i nazwisko: ", $person1->name, ' ', $person1->surname, '<br>';

    $person1->setName('Anna');
    echo "Imię i nazwisko: ", $person1->name, ' ', $person1->surname, '<br>';
    
    echo "Imię: ", $person1->getName(), ", nazwisko: ",$person1->getSurname();

    $person1->setData('Krystyna', 'Kowalska', 'Poznań', 168);
    $person1->getData();

    $person2 = new User();
    $person2->setData('Paweł', 'Nowak', 'Gniezno', 200);
    $person2->getData();
?>