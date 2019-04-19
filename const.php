<?php 
	class Mashina {
		const JOY = 4;
		public function oddiy() {
			echo '<br>', $this::JOY;
			echo '<br>', self::JOY;
		}
	}

	class Avtobus{
		const JOY = 32;
		public function oddiy() {
			echo '<br>', $this::JOY;
			echo '<br>', self::JOY;
		}
	}

	/*$matiz = new Mashina;
	$matiz->oddiy();
	$isuzu = new Avtobus;
	$isuzu->oddiy();*/


	class Texnika {
		const TURI = "maishiy";
		public $quvvat_vaqti;
		public $vazifasi;
		protected $d;
		public function win() {
			
		}
		
	}

 ?>