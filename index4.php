<?php 

/**
 * исключения
 */

class UserNotFoundException extends \Exception {

	private $id;

	public function __construct($id, $message = "", $code = 0, $previor = null) {
		$this->id = $id;
		parent::__construct($message, $code, $previos);
	}

	public function getId() {
		return $this->id;
	}
}

class User {
	private $user = [
		[
			'name' => 'vasia'
		],
		[
			'name' => 'petya'
		]
	];

public function getUser($id) {
	if(!isset($this->user[$id])) {
		throw new UserNotFoundException($id, 'User not found');
	}
	return $this->user[$id];
}
}

$user = new User();
try {
	$user->getUser(100500);
} catch (UserNotFoundException $exception) {
	echo $exception->getMessage();
	echo "\n";
	echo $exception->getLine();
	echo "\n";
	echo $exception->getId();
}

 ?>