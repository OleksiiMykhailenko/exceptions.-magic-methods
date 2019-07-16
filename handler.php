<?php 

/**
 * Напишите небольшое приложение которое будет проверять данные которые были введены с формы. Ваша логика должна использовать исключения и бросать:
 а) исключение EmptyStringException если в поле вводе была передана пустая строка
 б) исключение InvalidInputTypeException если данные были введены с неправильным типом (например число вместо строки)
Оформите валидатор как класс и подключите его в ваш обработчик формы. Вывод ошибок на ваше усмотрение.
 */

session_start();

require_once 'validator.php';

$user = [
	'login' => 'Alexey',
	'password' => '12345',
	'FIO' => 'Alexey Mykhailenko',
	'address' => 'Dnipro',
	'username' => 'Alexey'
];

if (empty($_POST)) {
	echo "Invalid data";
	return;
}

$login = $_POST['login'];
$password = $_POST['password'];
$FIO = $_POST['FIO'];
$address = $_POST['address'];

if (($password == $user['password']) && ($login == $user['login']) && ($FIO == $user['FIO']) && ($address == $user['address'])) {
	$_SESSION['user'] = $user;
header('Location: profile.php');
} else {
	echo "Invalid login or password";
	exit;
}

 ?>