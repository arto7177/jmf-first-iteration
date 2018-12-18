<?php

$greeting = "Hello World!";

$query = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

require $router -> direct('');