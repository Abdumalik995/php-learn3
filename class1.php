<?php 
	class Transport {
		public $rang;
		public $tezlik;
		public $joy;

		public function hisoblash($masofa){
			$vaqt = $masofa / $this->tezlik;
			return $vaqt;
		}
	}


	class Velosiped extends Transport {
		public $type;
	}

	class Mashina extends Transport {
		public $benzin_sarfi;
		public $svetofor_vaqti;
		public function benzin_hisoblash($masofa) {
			$natija = ($this->benzin_sarfi * $masofa) / 100;
			return $natija;
		}
		public function vaqt($masofa, $svetofor) {
			$vaqt1 = $masofa/$this->tezlik;
			$vaqt2 = $svetofor/$this->svetofor_vaqti/3600;
			return ($vaqt1 + $vaqt2)*60;
		}
	}

	class Avtobus extends Transport {
		public $t_vaqti;
		public $yoqilgi_sarfi;
		
		public function yoqilgi_hisoblash($masofa){
			$natija = ($this->yoqilgi_sarfi * $masofa) / 100;
			return $natija;
		}
		
	}

	$matiz = new Mashina;

	$matiz->tezlik = '50';
	$matiz->benzin_sarfi = '7';
	//echo $matiz->hisoblash(10000);
	echo '<br>',$matiz->benzin_hisoblash(150);
	echo '<br>',$matiz->vaqt(100, 10);


	$velo = new Velosiped;
	$velo->tezlik = '15';
	echo '<br>',$velo->hisoblash(10000);

	$isuzu = new Avtobus;
	$isuzu->yoqilgi_sarfi = '15';
	echo '<br>',$isuzu->yoqilgi_hisoblash(300);
 ?>