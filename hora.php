<?php
	$hora = date("h");
	$minutos = date("i");
	$meridiano = date("a");

	$dia = date("d");
	$mes = date("m");
	$estacion = "nulo";

/*	Primavera: 21 de setiembre a 21 de diciembre. 21/09 - 20/12 09101112
	Verano: 21 de diciembre a 21 de marzo. 21/12 - 20/03 12010203
	Otoño: 21 de marzo a 21 de julio.  21/03 - 20/07 03040506
	Invierno: 21 de julio a 21 de setiembre. 21/07 - 21/09 06070809 */ 

#Me fijo en qué estación estoy.
switch($mes){

	case "01":
		$estacion == "Verano";
	break;
	
	case "02":
		$estacion == "Verano";
	break;

	case "03":
		if ($dia < 21) {
			$estacion == "Verano";	
		}
		else {
			$estacion == "Otoño";
		}
	break;	
		
	case "04":
			$estacion == "Otoño";
	break;	
	
	case "05":
			$estacion == "Otoño";
	break;	
	
	case "06":	
			$estacion == "Otoño";
	break;	
	
	case "07":
		if ($dia < 21) {
			$estacion == "Otoño";	
		}
		else {
			$estacion == "Invierno";
		}
	break;	
	
	case "08":
			$estacion == "Invierno";
	break;	
	
	case "09":
		if ($dia < 21) {
			$estacion == "Invierno";
		}
		else {
			$estacion == "Primavera";
		}
	break;	
	
	case "10":
			$estacion == "Primavera";
	break;	

	case "11":
			$estacion == "Primavera";
	break;	
	
	case "12":
		if ($dia < 21) {
			$estacion == "Primavera";	
		}
		else {
			$estacion == "Verano";
		}	
	break;
}
#En base a la hora y la estación digo si es mañana, tarde o noche.
switch ($hora) {
	case 1:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de tarde.");
		}
	break;

	case 2:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de tarde.");
		}
	break;
	
	case 3:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de tarde.");
		}
	break;

	case 4:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de tarde.");
		}
	break;
	
	case 5:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de tarde.");
		}
	break;

	case 6:
		if($meridiano == "am"){
			if($estacion == "Invierno" || $estacion == "Otoño") {
				print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
			}
			else {
				print ("<b>${hora}:${minutos}${meridiano}</b>: Es de mañana.");	
			}
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de tarde.");
		}
	break;

	case 7:
		if($meridiano == "am") {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de mañana.");	
		}
		else { #Es PM
			if($estacion == "Invierno" || $estacion == "Otoño") {
				print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
			}
			else {
				print ("<b>${hora}:${minutos}${meridiano}</b>: Es de tarde.");	
			}
		}
	break;

	case 8:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de mañana.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
	break;
	
	case 9:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de mañana.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
	break;

	case 10:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de mañana.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
	break;
	
	case 11:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de mañana.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
	break;
	
	case 12:
		if($meridiano == "am"){
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de noche.");
		}
		else {
			print ("<b>${hora}:${minutos}${meridiano}</b>: Es de tarde.");
		}
	break;
}
?>
