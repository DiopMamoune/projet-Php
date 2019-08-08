<!DOCTYPE html>
<html>
<head>
	<title>Connextion</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min.css">
</head>
<body>
	<div class="container col-md-6 col-md-offset-3">
		<div  class="panel panel-primary">
			<div class="panel panel-heading">Formulaire d'inscription</div>
			<div class="panel panel-body">
				<form method="POST" action="controller/traitementConnexion.php">
					<div>
						<label class="control-label">login</label>
						<input type="text" name="login" class="form-control" required="true">
					</div>
					<div >
						<label class="">Mot de passe</label>
						<input type="password" name="motdepasse" class="form-control" required="true">
					</div>
					<?php 
					 ?>

				
			</div>
				<button type="submit" name="valider" class="btn btn-primary">Connexion</button>
				<a href="View/inscription.php" class="btn btn-success">Inscription</a>
			</div>
			</div>
	</form>
</body>
</html>