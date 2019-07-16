<?php 

/**
 * магический метод __toString
 */

class User {
	
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function __toString() {
		return 'Name is ' . $this->name;
	}
}

$user = new User('vasia');
echo $user;

?>