<!DOCTYPE html>
<html>
<head>
	<title>Administrateur</title>
	<link rel="stylesheet" type="text/css" href="../Style/bootstrap-cerulean.min.css">
</head>
<body>
	<div class="row">
		<div class="container">
			<div class="panel panel-info">
				<div class="panel-heading">Information de l'administrateur</div>
				<div class="panel-body">
						<div class="col-md-3">
							NOM :<?php echo $_SESSION['nom']; ?>
						</div>
						<div class="col-md-3">
							PRENOM :<?php echo $_SESSION['prenom']; ?>
						</div>
						<div class="col-md-3">
							LOGIN :<?php echo $_SESSION['login']; ?>
						</div>

				</div>
			</div>
		</div>
	</div>
	<div class="row"></div>
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">Liste des utilisateur</div>
			<div class="panel-body">
				<table class="table table-table-bordered">
		<tr>
			<th>nom</th>
			<th>prenom</th>
			<th>login</th>
			<th>Etat</th>
		</tr>
		<tr>
			<?php foreach ($list as $users) {
				echo "<tr>";
				echo '<td>'.$users->nom.'</td>';
				echo '<td>'.$users->prenom.'</td>';
				echo '<td>'.$users->login.'</td>';
				echo $users->etat == '0' ? '<td><a href="admin.php?login='.$users->login.'" class="btn btn-success">valider</a></td>' : '<td>Validé</td>' ;
				echo '</tr>';
			
			} ?>
		</tr>
	</table>
			</div>
		</div>
	</div>
</body>
</html>