<?php

$greeting = "Hello World!";

require 'functions.php';

try{

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=jmffoundation', 'root', '');
} catch (PDOException $e) {
	die('Could not connect');
}

$statement = $pdo->prepare('select * from donees');

$statement->execute();

var_dump($statement->fetchAll(PDO::FETCH_OBJ));

require 'index.view.php';