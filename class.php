<?php 
	class Mashina {
		public $brend = "Chevrolet";
		public $model;
		public $rangi = "oq";
		public $tezlik = "180";
		public $narxi = "5000";
		public $quvvat = "109 ot kuchi";
		public function oddiy() {
			echo "Metod...";
		}
		public function hisoblash($masofa) {
			return $masofa / $this->tezlik;
			
		}
		public function result($radius) {
			return ($this->tezlik/(3.6)*$this->tezlik/(3.6))/$radius;
		} 
		public function oddiy1() {
			echo '<br>Metod = '.__METHOD__.'';
			echo '<br>Class = '.__CLASS__.'';
		}
	}

	/*$damas = new Mashina;
	$damas->model = 'damas';
	$damas->rangi = 'oq';
	$damas->tezlik = '100';
	$damas->narxi = '7000';
	$damas->quvvat = '38 ot kuchi';

	echo "<pre>";	
	print_r($damas);
	echo "</pre>";*/

	/*$mers = new Mashina;
	$mers->model = 'mers 200';
	$mers->rangi = 'ko`k';
	$mers->tezlik = '39';
	$mers->narxi = '30000';
	$mers->quvvat = '200 ot kuchi';

	echo "<pre>";	
	print_r($mers);
	echo "</pre>";
*/
	/*$captiva = new Mashina;
	$captiva->model = 'captiva';
	$captiva->rangi = 'qora';
	$captiva->tezlik = '120';
	$captiva->narxi = '27000';
	$captiva->quvvat = '184 ot kuchi';

	echo "<pre>";	
	print_r($captiva);
	echo "</pre>";*/
	//echo "$captiva->model narxi $captiva->narxi, quvvati $captiva->quvvat"."ga ega".", rangi $captiva->rangi"."<br>";

	//echo "Uchala avtomobil umimiy narxi = ", $damas->narxi+$mers->narxi+$captiva->narxi;
	//echo "Damas 5km masofani ",$damas->hisoblash(5000)," minutda bosib utadi","<br>";
	//echo "mers 5km masofani ",$mers->hisoblash(5000)," minutda bosib utadi","<br>";
	//echo "captiva 5km masofani ",$captiva->hisoblash(5000)," minutda bosib utadi","<br>";
	
	//echo $mers->result(25);
	//echo $mers->oddiy1();

	class Kompyuter {
		public $brend;
		public $version = "core i5";
		public $cpu;
		public $ozu;
		public function win() {
			echo "Ozu xotirasi = ", $this ->ozu;
		}
		public function __construct() {
			//echo '<br>',$this->version;
		}
	}

	$acer = new Kompyuter;
	$acer->brend = 'Acer';
	$acer->version = 'core i5';
	$acer->cpu = '340 GH';
	$acer->ozu = '8 GB';

	/*echo "<pre>";	
	print_r($acer);
	echo "</pre>";*/

	$hp = new Kompyuter;
	$hp->brend = 'HP';
	$hp->version = 'core i7';
	$hp->cpu = '340 GH';
	$hp->ozu = '8 GB';

	/*echo "<pre>";	
	print_r($hp);
	echo "</pre>";
	$acer->win();*/

 	class M {
 		public $model = "Chevrolet";
 		public $tezlik;
 		public $rangi;

 		public function __construct($model, $tezlik, $rangi) {
 			echo '<br>',$model;
 		}
 	}
 	$jiguli = new M('Lada', 80, 'sariq');
 	$damas = new M('Daewoo', 50, 'sariq');
 	//print_r($damas);




 	/*class Tovar {
 		public $turi;
 		public $narxi;
 		public $sana;
 		public $muddati;
 		public function qiymat() {
 			
 			$a = substr($sana, 0, 6);
 			$b = substr($sana, 6)+3;
 			echo $a,$b;
 		}
 	}

 	$komp = new Tovar;
 	$komp->turi = 'elektron';
 	$komp->narxi = 500;
 	$komp->sana = '20.12.18';
 	$komp->muddati = '3';
 	echo '<br>';
 	print_r($komp);
 	echo '<br>';
 	$komp->qiymat();
 	echo $komp->sana;*/
 ?>