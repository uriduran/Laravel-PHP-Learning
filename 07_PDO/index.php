<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb; //result from connectToDb function is saved as pdo


var_dump($tasks);

var_dump($tasks[0]->description); //fetches the description column for the 0th array value.$_COOKIE


require 'index.view.php';
