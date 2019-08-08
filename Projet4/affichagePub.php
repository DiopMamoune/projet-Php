<?php 
include('model/fonctions.php'); 
include('model/constantes.php'); 
include('structure/_header.php');
chargerMesclasses();
$db=new Database();
$p=$db->affichepub();
	$form = new FormUsers();

	echo $form->startForm("container col-md-offset-4 col-md-4 jumbotron spacer", "Bienvenue à vos publication", "");?>
<table class="table table-bordered table-striped  well">
	<?php
			foreach ($p as $value) {
				
		echo '<tr>
		       <td> 
				 <div class="row-md-4">
					<div class="col-md-6">'.$value->login.'</div>
					<div class="col-md-6">'.$value->titre.'</div>
				 </div>
				
				 <div class="row-md-4">
					
					<div class="col-md-8">'.$value->posts.'</div>
				</div>
			 
				 </td>
			 </tr>	';					
				if(strlen($value->posts)<50){
					echo' <div class="col-md-8">'.$value->posts.'</div>';
				}
				else{
					$first=substr($value->posts,0,50);
					echo' <div class="col-md-8">';
					echo $first;

						  $two=substr($value->posts,50);
						  echo "<details>
						  <summary>voir+</summary>".$two
						  ."</details>";
					echo '</div>';
				}
				 
			}

			?>
</table>
<?php			
	echo $form->endForm();

	include('structure/_footer.php');
	
 ?>