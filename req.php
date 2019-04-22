<?php 
	require_once("poli.php");

	$yangi = new Yangiliklar;
	//echo "<pre>";
	//print_r($yangi);
	$about = new About;
	//echo "<pre>";
	//print_r($yangi);
	$galereya = new Galereya;

	$massiv = array($yangi, $about, $galereya);
	echo "<pre>";
	print_r($massiv);
	echo $about -> chop_etish();

 ?>