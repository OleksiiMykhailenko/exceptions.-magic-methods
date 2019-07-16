<?php 

/**
 * магический метод __call
 */

class A {

	const GET_NAME_METHOD = 'getName';
	
	private $store;

	public function __get($name) {
		return $this->store[$name];
	}

	public function __set($name, $value) {
		$this->store[$name] = $value;
	}

	public function __call($name, $arguments) {
		if ($name == self::GET_NAME_METHOD) {
			if (isset($this->store['name'])) {
				return $this->store['name'];
			}
			return null;
		}
	}

	/**
	 * магический местод __callStatic
	 */

	public static function __callStatic($name, $arguments) {
		echo 'I am static call';
	}
}

//$a = new A();
//$a->name = 'vasia';
//echo $a->getName();

$a = A::getName();

?>