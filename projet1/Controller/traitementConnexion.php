<?php
 session_start();
include('../Model/db.php');
 if (isset($_POST['valider'])) {
 	$login = $_POST['login'];
	$motdepasse = $_POST['motdepasse'];
 $requet = $db->prepare('select * from users where login=:login and motdepasse=:motdepasse and etat=:etat');

 $requet->execute([
 	'login'=>$login,
 	'motdepasse'=>$motdepasse,
 	'etat'=>'1'
 ]);
$enregis=$requet->fetch(PDO::FETCH_OBJ);
if ($enregis) {
	if ($enregis->profil=="Administrateur") {
		$_SESSION['nom']=$enregis->nom;
		$_SESSION['prenom']=$enregis->prenom;
		$_SESSION['login']=$enregis->login;
		echo "Bienvenue Mrs l'Administrateur";
		header('location:../View/admin.php');
	}else{
		echo "Merci ".$enregis->prenom, $enregis->nom. "d'avoir choisir notre site";
	}
}else{
	echo "Verifier vos informarions svp";
}

 }
 ?>