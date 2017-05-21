<?php


$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos'); //passing this to the QueryBuilder.php class for the selectAll function to use.
//selectAll function will take in 'todos' to specify which table to use.


require 'index.view.php';
