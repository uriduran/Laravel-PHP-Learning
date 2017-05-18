<?php

class QueryBuilder
{
    protected $pdo; //variable being passed from the results of Connection Class (Connection.php)

    public function __construct($pdo)
    {

        $this->pdo = $pdo; //stores result as current object within class.
    }


    public function selectAll($table) //accepts the name of the table specified in index.php
    {

        $statement = $this->pdo->prepare("select * from {$table}"); //prepared statement but has not exectuted.
        //$this->pdo is $pdo from Connection.php it is then being prepared with a select SQL statement.

        $statement->execute(); //executes SQL statement

        // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
        //by default it fetches as object and associative arrays
        //this specifies it as object.
        //Stores it as a variable $results
        // fetchAll fetches everything. Can be dangerous if DB calls a lot of data.

        return $statement->fetchAll(PDO::FETCH_CLASS);
        // going to return the executed statement and fetch all as classes.
    }
}
