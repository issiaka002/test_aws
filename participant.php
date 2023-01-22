<?php require_once("add.php"); ?>
<?php  ?>
<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="participant.css">
	<title>Enregistrement Participants</title>
</head>
<body>
	<div class="navbar">
		<nav>
			<ul>
				<li class="logo"><a  href="participant.php"><img id="logo" src="image/avatar_homme.jpg" alt="logo"></a></li>
				<li><a href="participant.php">Ajouter un participant</a></li>
				<li><a href="ListParticipant.php">Liste des participant</a></li>
			</ul>
		</nav>
	</div>
	<div class="container">
		<div class="img">
			<img src="image/fond.jpg" alt="banniere">
		</div>
		<form action="" method="post">
			<h1>Ajouter un participant</h1>
			<p class="msg"> <?php if(isset($message)){echo $message; } ?> </p>
			<div class="content">
				<div>
				<label for="FirstName">Nom</label><br>
				<input type="text" id="FirstName" name="firstName" placeholder="Ex: sidibe" required>
			</div>
			<div>
				<label for="LastName">Prenom</label><br>
				<input type="text" name="lastName" id="LastName" placeholder="Ex: issiaka" >
			</div>
			<div>
				<label for="PhoneNumber">Numero</label><br>
				<input type="text" name="tel" id="PhoneNumber" placeholder="Ex: 0585024748" required>
			</div>
			<div>
				<label for="Email">E-mail</label><br>
				<input type="email" name="email" id="Email" placeholder="Ex: sidibeissiaka999@gmail.com" required>
			</div>
			<div>
				<input type="submit" name="submit" >
			</div>
			</div>
		</form>
	</div>
</body>
</html>