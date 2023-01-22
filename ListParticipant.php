<?php require_once("list.php"); ?>
<?php  ?>
<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="ListParticipant.css">
	<link rel="stylesheet" href="participant.css">
	<title>Listes des participants</title>
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
	<main>
		<div class="list">
			<ul class="list">
				<?php while($participants = $req->fetch()){ ?>
			<li class="agent"><?php echo $participants['id']; ?> <img src="image/avatar_homme.jpg" alt="photo d'un participant"> <?php echo $participants['nom']; ?> <?php echo $participants['prenom'] ;?> </li>
				<?php } ?>
			
		</ul>
		</div>
		<div class="imgg">
			<img src="image/liste.jpg" alt="image simple">
		</div>
	</main>
</body>
</html>