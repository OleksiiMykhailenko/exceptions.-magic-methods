<?php 

/**
 * магический метод __invoke
 */

class ArraySorter {

	private $array;

	public function __construct($toSort) {
		$this->array = $toSort;
	}

	public function __invoke() {
		sort($this->array);
		return $this->array;
	}
}

$data = [0, 3, 4, 5, 1, 6, 2];
$sorter = new ArraySorter($data);
$sorted = $sorter();
var_dump($sorted);

?>