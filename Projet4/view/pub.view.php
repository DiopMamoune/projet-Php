
<?php 
	include('structure/_header.php');
	
	$form = new FormUsers();

	echo $form->startForm("container col-md-offset-4 col-md-4 jumbotron spacer", "Bienvenue à vos publication", "");
			echo
			'<div class="form-group">
				<select name="titre">
				<option>Lecture</option>
				<option>Politique</option>
				<option>Sport</option>
				</select>
			</div>

			<div>
					<textarea name="posts" rows="3" cols="45" placeholder="Publication"></textarea>
				</div>
				<div>
					<button type="submit" class="btn btn-success" name="publier">Publier</button>
				</div>
			';

	echo $form->endForm();

	include('structure/_footer.php');
?>