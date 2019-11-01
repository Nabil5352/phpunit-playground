<?php

use \PHPUnit\Framework\TestCase;
use \App\Models\User;

class UserTest extends TestCase{

	public function testFirstName(){
		$user = new User;

		$user->setFirstName("Nabil");

		$this->assertEquals($user->getFirstName(), "Nabil");
	}


	public function testLastName(){
		$user = new User;

		$user->setLastName("Ahmad");

		$this->assertEquals($user->getLastName(), "Ahmad");
	}


	public function testFullName(){
		$user = new User;

		$user->setFirstName("Nabil");
		$user->setLastName("Ahmad");

		$this->assertEquals($user->getFullName(), "Nabil Ahmad");
	}


	public function testFirstNameAndLastNameAreTrimmed(){
		$user = new User;
		$user->setFirstName("         Nabil ");
		$user->setLastName("Ahmad       ");

		$this->assertEquals($user->getFirstName(), "Nabil");
		$this->assertEquals($user->getLastName(), "Ahmad");
	}

}