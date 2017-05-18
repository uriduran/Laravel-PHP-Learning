<?php

function connectToDb()
{
    try {//use a try catch for error catching.
        return new PDO('mysql:host=localhost;dbname=mytodo', 'root', ''); //new instance of PDO
    } catch (PDOException $e) {
        die($e->getMessage); //if connection fails display this. Calls getMessage Function. Gives more details about error.
    }
}

function fetchAllTasks($pdo)
{
     $statement = $pdo->prepare('select * from todos'); //prepared statement but has not exectuted.

    $statement->execute(); //executes SQL statement

    // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
    //by default it fetches as object and associative arrays
    //this specifies it as object.
    //Stores it as a variable $results
    // fetchAll fetches everything. Can be dangerous if DB calls a lot of data.

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); //Fetches into a class called Task
}
