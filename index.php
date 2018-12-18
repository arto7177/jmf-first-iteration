<?php

$greeting = "Hello World!";

$query = require 'bootstrap.php';

$router = new Router;

require 'routes.php';

$router -> direct