<?php

class Person
{
    private $name;
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age>18) {
            throw new Exception("Person is not old enough.");
        }
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age * 365;
    }
}


$john = new Person("John");
$john->setAge(18);
var_dump($john);
$getAge = $john->getAge();
echo $getAge;
