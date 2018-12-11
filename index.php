<?php

$greeting = "Hello World!";

$pdo = new PDO('mysql:host=127.0.0.1;dbname=jmffoundation', 'root', '');

require 'index.view.php';