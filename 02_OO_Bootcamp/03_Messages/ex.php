<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

require 'vendor/autoload.php';

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Uriel Duran'));

var_dump($laracasts->getStaffMembers());
