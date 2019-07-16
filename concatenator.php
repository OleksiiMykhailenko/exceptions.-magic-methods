<?php 

/**
 * Напишите класс который умеет заменять в строке пробелы на знак +, а строку приводить в нижний регистр . Вызов должен быть следующий:
$concatenated = Concatenator::prepareString('I am concatenated');
echo $concatenated; // i+am+concatenated
 */

class Concatenator {

	public static function __callStatic($name, $arguments) {
		return str_replace(" ", "+", $arguments[0]);
	}
}

$concatenated = Concatenator::prepareString(mb_strtolower('I am concatenated'));
echo $concatenated; // i+am+concatenated

 ?>