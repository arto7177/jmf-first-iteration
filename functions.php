<?php

function dieanddump($data)
{
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}
//Function to test output of small snippets of code

function connectToDb()
{
	try{

	return new PDO('mysql:host=127.0.0.1;dbname=jmffoundation', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}
}
//Function to connect to database using PDO


function fetchAllDonees($pdo) {
	
$statement = $pdo->prepare('select * from donees');

$statement->execute();

return $statement->fetchAll(PDO::FETCH_CLASS, 'Donees');
}
//Return list of all Donees in database