<h1>FECHA ESTACION PHP</h1>

<?php 

$dia = date("d");
$mes = date("m");

/*	Primavera: 21 de setiembre a 21 de diciembre. 21/09 - 20/12
	Verano: 21 de diciembre a 21 de marzo. 21/12 - 20/03
	Otoño: 21 de marzo a 21 de julio.  21/03 - 20/07
	Invierno: 21 de julio a 21 de setiembre. 21/07 - 21/09 */

switch($mes){

	case "01":
		print "${dia}/${mes}: Estás en Verano.";
	break;
	
	case "02":
		print "${dia}/${mes}: Estás en Verano.";
	break;

	case "03":
		if ($dia < 21) {
			print "${dia}/${mes}: Estás en Verano.";	
		}
		else {
			print "${dia}/${mes}: Estás en Otoño.";
		}
	break;	
		
	case "04":
		print "${dia}/${mes}: Estás en Otoño.";
	break;	
	
	case "05":
		print "${dia}/${mes}: Estás en Otoño.";
	break;	
	
	case "06":
		print "${dia}/${mes}: Estás en Otoño.";
	break;	
	
	case "07":
		if ($dia < 21) {
			print "${dia}/${mes}: Estás en Otoño.";	
		}
		else {
			print "${dia}/${mes}: Estás en Invierno.";
		}
	break;	
	
	case "08":
		print "${dia}/${mes}: Estás en Invierno.";
	break;	
	
	case "09":
		if ($dia < 21) {
			print "${dia}/${mes}: Estás en Invierno.";	
		}
		else {
			print "${dia}/${mes}: Estás en Primavera.";
		}
	break;	
	
	case "10":
		print "${dia}/${mes}: Estás en Primavera.";
	break;	

	case "11":
		print "${dia}/${mes}: Estás en Primavera.";
	break;	
	
	case "12":
		if ($dia < 21) {
			print "${dia}/${mes}: Estás en Primavera";	
		}
		else {
			print "${dia}/${mes}: Estás en Verano.";
		}	
	break;
}
?>

	
