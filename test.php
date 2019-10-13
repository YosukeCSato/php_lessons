<?php

class User {
	
	private $name;
	private $id;
	
	public function__construct($name) {
		$this->name = $name;
	}
	
	public function showName() {
		echo $this->name;
	}
}
