<?php

$colores = array("IndianRed", "DarkOrange", "#FFFF00", "Indigo", "#7CFC00");
$count = count($colores);

for($i = 0; $i < $count; $i++){
	echo ("<p><font color=&#34".$colores[$i]."&#34>Lorem ipsum dolor sit amet.</font></p>");
}

?>
