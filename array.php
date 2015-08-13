<?php

$colores = array("IndianRed", "DarkOrange", "#FFFF00", "Indigo", "#7CFC00");
$formatos = array("b", "i", "u", "strike", "b");
$j = 0;

$count = count($colores);

for($i = 0; $i < $count; $i++){
	echo ("<p style='color:$colores[$i]'><$formatos[$j]>What</$formatos[$j]></p>");
	$j++;
}
?>
