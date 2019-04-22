<?php 
	class Maqola {
		public $id;
		public $name = "Yangi Maqola";
		public $anonss;
		public $texts;
		public $img;
		public $datee;
		public $about;

		function __construct($row) {
			$this->id = $row['id'];
			$this->name = $row['name'];
			$this->datee = $row['datee'];
			$this->anonss = $row['anonss'];
			$this->img = $row['img'];
			$this->categoriya = $row['categoriya'];
		}
	}


	class Yangiliklar extends Maqola {
		function Chop_etish() {
			echo "<br> Mavzusi: ".$this->name;
			echo "<br> ".$this->anoss;
			echo "<img src='rasm/$this->img' style='width:100px'>";

		}
	}

	class About extends Maqola {
		function Chop_etish() {
			echo "<br>Mavzusi: ".$this->name;
			echo "<br>".$this->anoss;

		}
	}

	class Galereya extends Maqola {
		function Chop_etish() {
			echo "<br>Mavzusi: ".$this->name;
			echo "<br>".$this->anoss;

		}
	}


?>