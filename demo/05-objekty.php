<?php

class Person
{
    private $firstName = 'James';
    private $lastName = 'Bond';
    private $age = 30;

    function introduceYourself()
    {
        echo $this->lastName . ', ' . $this->firstName . ' ' . $this->lastName . PHP_EOL;
    }

    function celebrateBirthday()
    {
        $this->age = $this->age + 1;
        //$this->age++;
    }

    function greet($name)
    {
        $currentHour = date('H');
        if ($currentHour > 4 && $currentHour <= 12) {
            $greet = 'Good morning';
        } else if ($currentHour > 12 && $currentHour < 22) {
            $greet = 'Good afternoon';
        } else {
            $greet = 'Good night';
        }
        echo $greet . ' ' . $name . PHP_EOL;
    }
}

$person = new Person();
$person->greet('Bob');
$person->introduceYourself();