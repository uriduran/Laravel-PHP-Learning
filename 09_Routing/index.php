<?php

    var_dump($_SERVER['REQUEST_URI']);

require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());
