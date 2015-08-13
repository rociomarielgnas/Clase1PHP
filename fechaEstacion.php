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
		print "${dia}/${mes}: Estás en verano.";
	break;
	
	case "02":
		print "${dia}/${mes}: Estás en verano.";
	break;

	case "03":
		if($dia < 21)
	break;	
	
	case "04":
	break;	
	
	case "05":
	break;	
	
	case "06":
	break;	
	
	case "07":
	break;	
	
	case "08":
	break;	
	
	case "09":
	break;	
	
	case "10":
	break;	
	case "11":
	break;	
	case "12":
	break;

}
?>
