<?php

$config = require 'config.php'; //config.php will return an array and store it
require 'database/Connection.php'; //creates a connection to the DB

require 'database/QueryBuilder.php';


return new QueryBuilder(
    Connection::make($config['database'])//$config['database'] passes the DB credentials for make() to work.
);

//Connection::make() passes the return from the Connection Class into QueryBuilder Class, accepts it as $pdo variable.
//Query Class then stores the $pdo connection as $this->PDO so that it can use it to run its objects/functions.
