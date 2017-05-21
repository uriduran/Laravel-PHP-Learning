<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb(); //result from connectToDb function is saved as pdo

$tasks = fetchAllTasks($pdo); //takes result from function above as $pdo, inputs it into fetchAllTasks function

var_dump($tasks);

var_dump($tasks[0]->description); //fetches the description column for the 0th array value.$_COOKIE


require 'index.view.php';
