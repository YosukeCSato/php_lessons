<?php


class User {
	
	// property
	public $name;

	// constructor
	public function __construct($name) {
		$this->name = $name;
	}
	
	// method
	public function sayHi() {
		echo "hi, I am $this->name!";
	}	
}

class AdminUser extends User {
	public function sayHello() {
		echo "hellow from Admin!";
	}
}

$tom = new User("Tom");
$bob = new User("Bob");
$steve = new Admin("Steve");

$bob->sayHi();
$steve->sayHi();
$steve->sayHello();


?>
