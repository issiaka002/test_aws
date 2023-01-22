<?php
try{
	$connect = 'mysql:host=localhost;dbname=participant';
	$pdo = new PDO($connect, 'root', "");
}
catch(PDOException $e){
	$msg = "ERREUR PDO dans ". $e->getMessage();
	die($msg);
}