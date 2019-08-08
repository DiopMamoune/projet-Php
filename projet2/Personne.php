<?php 
class Personne{
	private $nom = "inconnue";
	private $prenom = "inconnue";
	private $age = 10;
	 static $SEXE_MASCULIN="M";
	static $SEXE_FEMININ="F";

		/**public function __construct($nom,$prenom,$age){
			 		$this->nom = $nom;
 					$this->prenom=$prenom;

		}**/
		public function setSexe($sexe){
			if ($sexe!=self::$SEXE_MASCULIN && $sexe !=self::$SEXE_FEMININ) {
				echo "Sexe invalide";
				$this->sexe=$SEXE_MASCULIN;
			}else {
				$this->sexe=$sexe;
			}
		}

//implementation de destructeur
		public function __destruct(){
			echo "objet détruite<br>";
		}

 	//les getteurs
		public function getSexe(){
			return $this->sexe;
		}
 	public function getNom(){
 		return $this->nom;
 	}
 	public function getPrenom(){
 		return $this->prenom;
 	}
 	//les setteurs
 	public function setNom($nom){
 		$this->nom = $nom;
 	}
 	public function setPrenom($prenom){
 		$this->prenom=$prenom;
 	}
 	public function manger(){
 		echo "je mange";
 	}
 	public function marcher(){
 		echo "je marche";
 	}
 	public function naitre(){
 		$this->age = 0;
 	}
 	public function grandir($age){
 		//$this->age+=$age;
 		$this->age=$this->age+$age;
 	}
 }

?>