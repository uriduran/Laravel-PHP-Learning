<?php

class Connection
{
    public static function make($config)
    {
        try {//use a try catch for error catching.
           
            return new PDO(
                $config['connection'] . ';dbname=' .$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage); //if connection fails display this. Calls getMessage Function. Gives more details about error.
        }
    }
}
