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
			$vaqt = $masofa / $this->tezlik;
			return $vaqt;
		} 
	}

	$damas = new Mashina;
	$damas->model = 'damas';
	$damas->rangi = 'oq';
	$damas->tezlik = '140';
	$damas->narxi = '7000';
	$damas->quvvat = '38 ot kuchi';

	echo "<pre>";	
	print_r($damas);
	echo "</pre>";

	$mers = new Mashina;
	$mers->model = 'mers 200';
	$mers->rangi = 'ko`k';
	$mers->tezlik = '240';
	$mers->narxi = '30000';
	$mers->quvvat = '200 ot kuchi';

	echo "<pre>";	
	print_r($mers);
	echo "</pre>";

	$captiva = new Mashina;
	$captiva->model = 'captiva';
	$captiva->rangi = 'qora';
	$captiva->tezlik = '220';
	$captiva->narxi = '27000';
	$captiva->quvvat = '184 ot kuchi';

	echo "<pre>";	
	print_r($captiva);
	echo "</pre>";
	//echo "$captiva->model narxi $captiva->narxi, quvvati $captiva->quvvat"."ga ega".", rangi $captiva->rangi"."<br>";

	//echo "Uchala avtomobil umimiy narxi = ", $damas->narxi+$mers->narxi+$captiva->narxi;
	echo $damas->hisoblash(200);
	echo $mers->hisoblash(200);
	echo $captiva->hisoblash(200);
 ?>