<?php



$person = [
    'age' => 31,
    'hair' => 'brown',
];

//Add in value to an Ass array.
$person['name'] = 'Jefrey';

//Prints out all of the variable, key & value.
var_dump($person);

unset($person['age']); //removes that key and value from array.


// die(); ends code does not execute anything after.

require 'index.view.php';


