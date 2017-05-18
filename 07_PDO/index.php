<?php

try {//use a try catch for error catching.
    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', ''); //new instance of PDO
} catch (PDOException $e) {
    die('Could not connect.'); //if connection fails display this.
}

$statement = $pdo->prepare('select * from todos'); //prepared statement but has not exectuted.

$statement->execute(); //executes SQL statement




require 'index.view.php';
