<?php 
session_start();
	$title = "Publication";
	include('model/fonctions.php'); 
	include('model/constantes.php'); 
	chargerMesClasses();

	$db = new Database();
	$user = $_SESSION['validate_user'];
	if (isset($_POST['publier'])){

		extract($_POST);

		$pub = new publication($user->id, $titre, $posts);

		if ($db->addPub($pub)) {
			header('location: affichagePub.php');
		}else{
			echo "Erreur d'affichage";
		}
	}
	include('view/pub.view.php');
 ?>