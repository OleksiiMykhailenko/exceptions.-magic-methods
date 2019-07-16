<?php 

/**
 * Напишите класс который с помощью магических методов будет делать манипуляции над строками.
Вызов класса должен быть следующий:
$stringFormater = new StringFormater();
$stringFormater->name = 'uSeRnaMe';
echo $stringFormater->name; // вывести USERNAME
 */

class stringFormater {
	
	private $formater;

	public function __get($name) {
		return $this->formater[$name];
	}

	public function __set($name, $value) {
		$this->formater[$name] = strtoupper($value);
	}
}

$stringFormater = new StringFormater();
$stringFormater->name = 'uSeRnaMe';
echo $stringFormater->name; //USERNAME

 ?>