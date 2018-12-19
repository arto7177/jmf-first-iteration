<?php

$greeting = "Hello World!";

$query = require 'core/bootstrap.php';


require Router::load('routes.php')
    ->direct(Request::uri());