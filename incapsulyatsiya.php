<?php 
	class Baza {
		public $a = 'a public';
		protected $b = 'b protected';
		private $c = 'c private';

		public function xato() {
			echo "<br>".$this->a;
			echo "<br>".$this->b;
			echo "<br>".$this->c;
		}
	}

	$obyekt = new Baza();
	echo '<br>'.$obyekt->a;
 ?>