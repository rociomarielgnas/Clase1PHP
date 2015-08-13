<?php

$colores = array("IndianRed", "DarkOrange", "#FFFF00", "Indigo", "#7CFC00");
$count = count($colores);

for($i = 0; $i < $count; $i++){
	echo ("<p style='color:$colores[$i]'>What</p>");
}
?>
