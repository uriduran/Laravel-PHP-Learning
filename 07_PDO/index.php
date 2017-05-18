<?php

try {//use a try catch for error catching.
    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', ''); //new instance of PDO
} catch (PDOException $e) {
    die('Could not connect.'); //if connection fails display this.
}

require 'index.view.php';
