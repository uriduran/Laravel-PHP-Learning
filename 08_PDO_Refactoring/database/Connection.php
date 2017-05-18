<?php

class Connection
{
    public static function make()
    {
        try {//use a try catch for error catching.
            return new PDO('mysql:host=localhost;dbname=mytodo', 'root', ''); //new instance of PDO
        } catch (PDOException $e) {
            die($e->getMessage); //if connection fails display this. Calls getMessage Function. Gives more details about error.
        }
    }
}
