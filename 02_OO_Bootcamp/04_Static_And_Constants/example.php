<?php

class Person
{
    public static $age = 1; //age is unique but by being static it is now shared among all persons

    public function haveBirthday()
    {
        static::$age++;
    }
}

$joe = new Person;
$joe->haveBirthday();

echo Person::$age; //you have to call it this way.
//cannot call $joe->age();

$jane = new Person;
$jane->haveBirthday();

echo Person::$age; //You'd expect this person to also output 2
//but instead will add to the previous Joe age of 2 and return 3.
//$age is not bound to an object
//$age is shared.
