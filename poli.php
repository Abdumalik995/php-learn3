<?php 
	class Maqola {
		public $id;
		public $name = "Mavzu1";
		public $anonss;
		public $texts;
		public $img;
		public $datee;
		public $about;
	}


	class Yangiliklar extends Maqola {
		function Chop_etish() {
			echo "<br>Mavzusi".$this->name;
			echo "<br>".$this->anoss;

		}
	}

	class About extends Maqola {
		function Chop_etish() {
			echo "<br>Mavzusi".$this->name;
			echo "<br>".$this->anoss;

		}
	}

	class Galereya extends Maqola {
		function Chop_etish() {
			echo "<br>Mavzusi".$this->name;
			echo "<br>".$this->anoss;

		}
	}




?>