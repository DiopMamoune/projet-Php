<?php 
	class publication{
		private $idusers;
		private $titre;
		private $posts;

		public function __construct($idusers,$titre,$posts){
			$this->setIdusers($idusers);
			$this->setTitre($titre);
			$this->setPosts($posts);
		}

		public function setIdusers($idusers){$this->idusers=$idusers;}
		public function setTitre($titre){$this->titre=$titre;}
		public function setPosts($posts){$this->posts=$posts;}

		public function getIdusers(){return $this->idusers;}
		public function getTitre(){return $this->titre;}
		public function getPosts(){return $this->posts;}
	}

 ?>