<?php

//first page user sees
//this page will redirect the user to where they wish to go.



require 'vendor/autoload.php'; //loads in the classes from other pages via composer
require 'core/bootstrap.php';
//calls bootstrap file

use App\Core\Router;
use App\Core\Request;

Router::load('app/routes.php')//load routing page
    ->direct(Request::uri(), Request::method());
    //the Request class contains two functions
    //uri which parses the html and method which takes
    //in whether it is GET or POST
    //see Request.php
