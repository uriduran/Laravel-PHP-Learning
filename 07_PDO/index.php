<?php

try {//use a try catch for error catching.
    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', ''); //new instance of PDO
} catch (PDOException $e) {
    die($e->getMessage); //if connection fails display this. Calls getMessage Function. Gives more details about error.
}

$statement = $pdo->prepare('select * from todos'); //prepared statement but has not exectuted.

$statement->execute(); //executes SQL statement

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
//by default it fetches as object and associative arrays
//this specifies it as object.
//Stores it as a variable $results
// fetchAll fetches everything. Can be dangerous if DB calls a lot of data.

var_dump($tasks);

var_dump($tasks[0]->description); //fetches the description column for the 0th array value.$_COOKIE






require 'index.view.php';
