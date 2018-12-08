<?php

/**
 * 
 */
class User
{
	protected $firstname;
	protected $lastname;

	public function __construct($firstname, $lastname)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname
	}
}


require 'donate.view.php';