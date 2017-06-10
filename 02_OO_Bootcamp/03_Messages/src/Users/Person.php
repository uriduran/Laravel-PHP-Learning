<?php

namespace Acme\Users; //namespace is not Acme but dir Users so Acme\Users.

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
