<?php require_once "connect.php"; ?>
<?php  

if(isset($_POST['submit'])){
	if(isset($_POST['firstName']) AND isset($_POST['lastName']) AND isset($_POST['tel']) AND isset($_POST['email'])){

		$nom = htmlspecialchars($_POST['firstName']);
		$prenom = htmlspecialchars($_POST['lastName']);
		$email = htmlspecialchars($_POST['email']);
		$tel = htmlspecialchars($_POST['tel']);

		if(!empty($prenom) and !empty($tel) and !empty($email) and !empty($nom) ){

			$reqq = $pdo->prepare("SELECT * FROM user WHERE email=?");
			$reqq->execute([$email]);
			$reqq->fetchAll();
			$cpt = $reqq->rowCount();
			if($cpt>0){
				$message = "Ce participant exite deja !!";
			}else{
				$requete = $pdo->prepare("INSERT INTO user(nom,prenom,numero,email) VALUES(?, ?, ?, ?)");
				$requete->execute(array($nom, $prenom, $tel, $email));
				$message = "Ce participant a été ajouter !!";
			}
			

		}else{
			$message = "Veuillez rempkir tous les champs !!";
		}
	}
}



?>