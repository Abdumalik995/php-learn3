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

	$obyekt = new Baza;
	echo '<br>'.$obyekt->a;
	//echo '<br>'.$obyekt->b;
	echo '<br>'.$obyekt->xato();
	echo '<br>'.$obyekt->c;
	$obyekt2 = new Baza;
	echo '<br>'.$obyekt2->a;
 ?>