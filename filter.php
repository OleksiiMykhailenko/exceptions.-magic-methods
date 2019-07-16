<?php 

/**
 *  Напишите класс который будет фильтровать массив путем удаления его элементов. Только с использованием магических методов!. Вызов класса будет такой:
$filter = new Filter(['f', 2, 't', 7, 2, 'k']);
$filter->getNumbers(); //[2,7,2]
$filter->getStrings(); // ['f', 't', 'k']
 */

class Filter {

	private $array;
	
	const GET_NUMBER_METHOD = 'getNumbers';
	
	const GET_STRING_METHOD = 'getStrings';

	public function __construct($array) {
		$this->array = $array;
	}

	public function __call($name, $arguments) {
		if ($name == self::GET_NUMBER_METHOD) {
			$result_array = [];
			foreach ($this->array as $value) {
					if (is_numeric($value)) {
						$result_array[] = $value;
					}
				}
			return $result_array;
		}

		if ($name == self::GET_STRING_METHOD) {
			$result_array = [];
			foreach ($this->array as $value) {
					if (is_string($value)) {
						$result_array[] = $value;
					}
				}
			return $result_array;
		}
	}
}

$filter = new Filter(['f', 2, 't', 7, 2, 'k']);
var_dump($filter->getNumbers()) . "\n"; //[2, 7, 2]
var_dump($filter->getStrings()); // ['f', 't', 'k']

 ?>