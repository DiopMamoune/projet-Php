<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="../style/bootstrap-cerulean.min.css">
</head>
<body>
	<div class="container col-md-6 col-md-offset-3">
		<div  class="panel panel-primary">
			<div class="panel panel-heading">Formulaire d'inscription</div>
			<div class="panel panel-body">
				<form  action="../controller/traitementInscription.php" method="POST">
					<div>
						<label class="control-label">Nom</label>
						<input type="text" name="Nom" class="form-control" required>
					</div>
					<div >
						<label class="control-label">Prenom</label>
						<input type="text" name="Prenom" class="form-control" required>
					</div>
					<div >
						<label class="control-label">Email</label>
						<input type="Email" name="Email" class="form-control" required>
					</div>
					<div >
						<label class="control-label">Telephone</label>
						<input type="text" name="Telephone" class="form-control" required >
					</div>
					<div >
						<label class="control-label">Login</label>
						<input type="text" name="Login" class="form-control" required>
					</div>
					<div >
						<label class="control-label">Mot de passe</label>
						<input type="password" name="mdp" class="form-control" required>
					</div>
				<br>
				<div>
					<select name="profil">
						<option>Utilisateur</option>
						<option>Administrateur</option>	
					</select>
				</div>
				<br>
				<button type="submit" name="valider" class="btn btn-success">Inscription</button>
				<a href="index.php" class="btn btn-success">Retour</a>
				</form>
			</div>

		</div>
	</div>
</body>
</html>