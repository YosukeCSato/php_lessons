<?php


$msg = "hello from the TOP!";
echo $msg;
var_dump($msg)

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

$tom = new User("Tom");
$bob = new User("Bob");

$bob->sayHi();

?>
