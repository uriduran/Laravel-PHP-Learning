<?php

class Person
{

    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->setAge();
        $this->nameLength();
    }

    public function setAge()
    {
        if ($this->age>18) {
            $this->age = "Adult";
        } else {
            $this->age="Minor";
        }
    }

    public function nameLength()
    {
        $this->length = strlen($this->name);
    }
}

if ($_POST) {
    $Uriel = new Person($_POST["name"], (int)$_POST["age"]);
}
