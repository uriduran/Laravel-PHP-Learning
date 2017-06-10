<?php
namespace Acme;

use Acme\Users\Person;

//Specifically say Person class is now within the Acme\Users dir.

class Staff
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}
