<?php 
	include('../model/db.php');
if (isset($_POST[valider])) {
		
	$Nom= $_POST['Nom'];
	$Prenom = $_POST['Prenom'];
	$Email = $_POST['Email'];
	$Telephone = $_POST['Telephone'];
	$Login = $_POST['Login'];
	$mdp = $_POST['mdp'];
	$profil = $_POST['profil'];

	$requet = $db->prepare('insert into users values(null,:Nom,:Prenom,:Email,:Telephone,:Login,:mdp,:profil,:etat)');
	$requet-> execute([
		'Nom'=>$Nom,
		'Prenom'=>$Prenom,
		'Email'=>$Email,
		'Telephone'=>$Telephone,
		'Login'=>$Login,
		'mdp'=>$mdp,
		'profil'=>$profil,
		'etat'=>$profil=="Administrateur"?'1':'0'
	]);
	header('location: ../index.php');
}
 ?>
 