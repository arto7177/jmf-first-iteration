<?php

$greeting = "Hello World!";


$query = require 'bootstrap.php';


$donees = $query->selectAll('donees');


require 'index.view.php';