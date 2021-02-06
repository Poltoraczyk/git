<?php
    class A{
        public $a;

        public function setA($a){            
            $this->a = $a;
        }        
        
        public function getA(){            
            return $this->a;
        }
    }

    class B extends A{
        private $b;

        public function setB($b){            
            $this->b = $b;
        }        
        
        public function getB(){            
            return $this->b;
        }
    }

    $objA = new A();
    $objA->setA("Obiekt A");
    echo $objA->getA(), "<br>";

    $objB = new B();
    $objB->setB("Obiekt B");
    echo $objB->getB(), "<br>";
    $objB->setA("Obiekt B korzysta z metody klasy A");
    echo $objB->a;
    echo $objB->getA();

    $objA->b = "Test"; // dodanie nowej właściowści do klasy A
    echo $objA->b; // wyświetlenie nowej właściwości z klasy A
    //$objA->setB("Test"); error nie można skorzystać z metod klasy B

?>