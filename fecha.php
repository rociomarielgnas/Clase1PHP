<h1>fecha PHP</h1>


<?php 
	$fecha1 = "Y-d-m h:m";
	$fecha2 = "d/m h:m:sa"; 
	$fecha3 = "h:ma ----> m/a";
	$fecha4 = "d/m/a";
	$fecha5 = "d/m";
	
	echo "<p>Formato = Fecha</p>";  
	echo "<p><b>Y-d-m h:m = ".date("Y-d-m h:m")."</b></p>";
	echo "<p><i><h1>d/m h:m:sa = ".date("d/m h:m:sa")."</h1></i></p>";
	echo "<p><h2>h:ma ----> m/Y = ".date("h:ma ----> m/Y")."</h2></p>";
	echo "<p><u>d/m/Y = ".date("d/m/Y")."</u></p>";
	echo "<p><strike>d/m = ".date("d/m")."</strike></p>";
	
?>
