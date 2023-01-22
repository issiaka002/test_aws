<?php require_once("connect.php"); ?>
<?php 

$req = $pdo->prepare("SELECT * FROM user");
$req->execute();

?>