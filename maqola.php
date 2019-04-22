<?php 
	header("Content-Type: text/html; charset=utf-8");
	require_once("data.php");

	foreach ($massiv as $sahifalar) {
		$sahifalar->chop_etish();
		
	}
?>







