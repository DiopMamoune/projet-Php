<?php 
	$title = "Inscription";
	include('model/fonctions.php'); 
	include('model/constantes.php'); 
	chargerMesClasses();

	$db = new Database();

	if (isset($_POST['ajouter'])) {
		extract($_POST);
		if (notEmpty([$nom, $prenom, $email, $tel, $login, $mdp])) {

			$user = new Users($nom, $prenom, $email, $tel, $login, $mdp);

			if($db->addUser($user)){
				message("compte activer avec succes","succes");
				header('Location: index.php');
				exit();
			}else{
				message("Erreur d'ajout");
			}
			
		}
		else{
			message("Veuillez remplir tous les champs");
		}
	}


	require('view/inscription.view.php');
?>