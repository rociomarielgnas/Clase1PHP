<?php

$colores = array("IndianRed", "DarkOrange", "#FFFF00", "Indigo", "#7CFC00");
$fondos = array("DarkOrange", "#FFFF00", "#7CFC00", "IndianRed", "Indigo");
$formatos = array("b", "i", "u", "strike", "b");
$familias = array("verdana","courier","arial","times","helvetica");
$tamaños = array("100%","50%","30%","200%","250%");
$j = 0;

$count = count($colores);

for($i = 0; $i < $count; $i++){
	echo ("<p style='color:$colores[$i]; background-color:$fondos[$i]; font-size:$tamaños[$i]; font-family:$familias[$i]'><$formatos[$i]>Every HTML element has a default style (background color is white and text color is black). Changing the default style of an HTML element, can be done with the style attribute.</$formatos[$i]></p>");
}
?>
