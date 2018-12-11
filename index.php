<?php

$greeting = "Hello World!";

require 'donees.php';

require 'functions.php';

$pdo = connectToDb();

$donees =fetchAllDonees($pdo);


require 'index.view.php';