<?php 
session_start();
include('../model/db.php');
$requet=$db->prepare('select * from users where profil=:profil');
$requet->execute([
	'profil'=>"Utilisateur"
]);
$list=$requet->fetchAll(PDO::FETCH_OBJ);
if(isset($_GET['login'])){
	$requet=$db->prepare('update users set etat=:etat where login=:login');
	$requet->execute([
		'etat'=>'1',
		'login'=>$_GET['login']
	]);
}
require_once('admin.view.php');
 ?>