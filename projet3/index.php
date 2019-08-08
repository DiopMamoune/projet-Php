<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de Connection</title>
	<link rel="stylesheet" type="text/css" href="style/boostrap-cerulean.min.css">
</head>
<body>
	<?php 
		$form= new Formulaire();
	 ?>
	 <form class="action">
	 	<?= $form->input("login");?>
	 	<?= $form->input("password");?>
	 </form>

</body>
</html>