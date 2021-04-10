<?php
    final class Person{
        //metody
    }

    class Child extends Person{
        //metody
    }

    //Fatal erro: Class Child may not inherit form final class (Person)

    //jeżeli przed klasą mamy final to nie może być klasy dziedziczącej po niej
    ?>