<?php 

session_start();

if(!isset($_SESSION['user'])) {
	echo 'Forbitten';
	return;
}

$user = $_SESSION['user'];
$FIO = $_SESSION['FIO'];
$adress = $_SESSION['address'];

 ?>

 <p>Username: <?=$user['username']?></p>
 <p>FIO: <?=$user['FIO']?></p>
 <p>Address: <?=$user['address']?></p>