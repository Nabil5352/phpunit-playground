<?php

namespace App\Models;

class User{

	protected $first_name;
	protected $last_name;

	public function setFirstName($firstName){
		$this->first_name = trim($firstName);
	}

	public function getFirstName(){
		return $this->first_name;
	}

	public function setLastName($lastName){
		$this->last_name = trim($lastName);
	}

	public function getLastName(){
		return $this->last_name;
	}

	public function getFullName(){
		return $this->first_name ." ". $this->last_name;
	}

}