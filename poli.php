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
			echo "<br>Mavzusi: ".$this->name;
			echo "<br>".$this->anoss;

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

/*$con = mysqli_connect("localhost","root", "", "news_block");
	if (mysqli_connect_errno()) {
		echo "Bazaga ulanishda xatolik: ".mysqli_connect_error();
	}
$result = mysqli_query($con, "SELECT maqola.id, maqola.name, maqola.anonss, maqola.img, maqola.datee, maqola.about as categoriya FROM content as maqola LEFT JOIN categoriya as cat ON maqola.cat_id = cat.id ORDER BY maqola.id");

while($row = mysqli_fetch_assoc($result)) {
	$massiv[] = new $row['categoriya']($row);
}
*/
?>