<?php

function dieanddump($data)
{
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}