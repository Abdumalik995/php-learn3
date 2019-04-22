<?php 
	require_once("poli.php");

	$massiv = array();

	$con = mysqli_connect("localhost","root", "", "news_block");
	if (mysqli_connect_errno()) {
		echo "Bazaga ulanishda xatolik: ".mysqli_connect_error();
	} /*else {
		echo "bazaga ulandi";
	}*/
	$result = mysqli_query($con, "SELECT maqola.id, maqola.name, maqola.anonss, maqola.img, maqola.datee, maqola.about as categoriya FROM content as maqola LEFT JOIN kategoriya as cat ON maqola.cat_id = cat.id ORDER BY maqola.id");

	while($row = mysqli_fetch_array($result)) {
	$massiv[] = new $row['categoriya']($row);
	}
	//echo "<pre>";
	//print_r($massiv);
?>