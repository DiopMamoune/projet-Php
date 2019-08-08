 <?php 

	include('structure/_header.php');

	echo $form->design("col-md-2");

		echo $form->startFormUser("col-md-6 well spacer", "Information de ".$user->login);
			$form->printInfo("col-xs-6", "NOM : ", $user->nom);
			$form->printInfo("col-xs-6", "PRENOM : ", $user->prenom);
			$form->printInfo("col-xs-6", "EMAIL : ", $user->email);
			$form->printInfo("col-xs-6", "TELEPHONE : ", $user->tel);
			echo $form->reset("Deconnecter", "index.php");
			echo "";
			echo $form->reset("Publication", "pub.php");
		echo $form->endFormUser();
	echo $form->betweenDesign("col-md-6");
		
	echo $form->endDesign();	
	
	include('structure/_footer.php');

	?>
 