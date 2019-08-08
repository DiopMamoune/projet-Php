<?php 
	session_start();
	$title = "Page utilisateur";
	include('model/fonctions.php'); 
	include('model/constantes.php'); 
	chargerMesClasses();

	$db = new Database();
	$form = new FormUsers();
	$user = $_SESSION['validate_user'];

	

	require('view/admin.view.php');
 ?>