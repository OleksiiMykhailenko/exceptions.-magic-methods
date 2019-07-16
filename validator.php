<?php 

class EmptyStringException extends \Exception {

}

class InvalidInputTypeException extends \Exception {

}

class Validator extends \Exception {

	public static function StringException($string) {
		if(trim($string) == "") {
			throw new EmptyStringException("Empty line!");
		}
	}

	public static function InputTypeException($string) {
		$result_array = str_split($string);
		sort($result_array);
			if (is_numeric($result_array[0])) {
			throw new InvalidInputTypeException("There should not be numbers in this field!");
		}
	}
}

try {
	Validator::StringException($_POST["login"]);
	} catch (EmptyStringException $e) {
	echo $e->getMessage();
}

try {
	Validator::InputTypeException($_POST["address"]);
	} catch (InvalidInputTypeException $e) {
	echo $e->getMessage();
}

?>