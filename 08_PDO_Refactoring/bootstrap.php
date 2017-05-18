<?php

require 'database/Connection.php'; //creates a connection to the DB

require 'database/QueryBuilder.php';


return new QueryBuilder(
    Connection::make()
);
