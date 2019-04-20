<?php 
	class Transport {
		public $rang;
		public $tezlik;
		public $joy;
		public $kira;
		public function hisoblash($masofa){
			$vaqt = ($masofa / $this->tezlik)*60;
			return $vaqt;
		}
		public function vaqt1($masofa, $os, $ov) {
			$vaqt1 = $masofa/$this->tezlik;
			$vaqt2 = $os * $ov/3600;
			return ($vaqt1+$vaqt2)*60;
		}
		public function rasxod($sarf, $narxi) {
			return $sarf * $narxi;
		}
		public function foyda($joy, $kira) {
			return $joy*$kira;
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

	$matiz->tezlik = '60';
	$matiz->joy = '4';
	$matiz->benzin_sarfi = '7';
	$matiz->svetofor_vaqti = '30';
	$matiz->kira = '4000';
	//echo $matiz->hisoblash(10000);
	//echo '<br>',$matiz->benzin_hisoblash(150);
	echo '<br>',$matiz->vaqt(20, 5);
	echo '<br> Matiz 30 km masofaga ',round($matiz->benzin_hisoblash(30)),' litr yoqilgi sarflaydi va ',round($matiz->hisoblash(30)),' minutda yetib borib ',($matiz->foyda(4,6000)-$matiz->rasxod(2, 4200)),' so`m foyda qiladi';


	$velo = new Velosiped;
	$velo->tezlik = '15';
	//echo '<br>',$velo->hisoblash(10000);

	$isuzu = new Avtobus;
	$isuzu->joy = '40';
	$isuzu->kira = '1200';
	$isuzu->tezlik = '50';
	$isuzu->yoqilgi_sarfi = '20';

	echo '<br>',$isuzu->yoqilgi_hisoblash(20),' litr';
	echo '<br>',round($isuzu->vaqt1(20, 7, 20)),' minut';
	echo '<br> Isuzu 30 km masofaga ',round($isuzu->yoqilgi_hisoblash(30)),' litr yoqilgi sarflaydi va ',round($isuzu->vaqt1(30, 7, 10)),' minutda yetib borib ',($isuzu->foyda(50,1200)-$isuzu->rasxod(6, 4000)),' so`m foyda qiladi';
 ?>