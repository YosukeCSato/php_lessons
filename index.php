<?php


class User {
	
	// property
	public $name;
	public static $count = 0;

	// constructor
	public function __construct($name) {
		$this->name = $name;
		self::$count++;
	}
	
	// method
	public function sayHi() {
		echo "hi, I am $this->name!";
	}
	
	public static function getMessage() {
		echo "hello from static method;
	}

}

class AdminUser extends User {
	public function sayHello() {
		echo "hello from Admin!";
	}
}

$tom = new User("Tom");
$bob = new User("Bob");
$steve = new AdminUser("Steve");

$bob->sayHi();
$steve->sayHi();
$steve->sayHello();

echo $count;
?>
