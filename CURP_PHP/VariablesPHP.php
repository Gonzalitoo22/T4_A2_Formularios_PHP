<?php
	//variable en PHP $variable

	$variable = 0;

	$apPaterno = $_POST['caja_apPaterno'];
	$apMaterno = $_POST['caja_apMaterno'];
	$nombre = $_POST['caja_nombre'];
	$anac = $_POST['caja_anac'];
	$mes = $_POST['selectmes'];
	$dia = $_POST['selectdia'];
	$sexo = $_POST['selectsexo'];
	$estado = $_POST['selectestado'];

	$apPaterno = strtoupper($apPaterno);
	$apMaterno = strtoupper($apMaterno);
	$nombre = strtoupper($nombre);
	$anac = strtoupper($anac);
	$mes = strtoupper($mes);
	$dia = strtoupper($dia);
	$sexo = strtoupper($sexo);
	$estado = strtoupper($estado);

	
	$curp;
	$curp = substr($apPaterno, 0, 1);
	$primerVocal;
	$caracter;
	$cont = 1;
	function primer($apPaterno, $cont){
		return $apPaterno{$cont};
	}

	do{	
		$caracter = primer($apPaterno, $cont);
		$primerVocal = $caracter;
		$cont++;
	}while($caracter != 'A' && $caracter != 'E' && $caracter != 'I' && $caracter != 'O' && $caracter != 'U' && $caracter != ' ');
	$primerLAM = substr($apMaterno, 0, 1);
	$primerLAN = substr($nombre, 0, 1);
	$nanac = substr($anac, -2, 2);

	$cont = 1;
	$primerCAP;
	function primerCAP($apPaterno, $cont){
		return $apPaterno{$cont};
	}
	do{
		$caracter = primerCAP($apPaterno, $cont);
		$primerCAP = $caracter;
		$cont++;
	}while($caracter == 'A' || $caracter == 'E' || $caracter == 'I' || $caracter == 'O' || $caracter == 'U' || $caracter == ' ');


	$cont = 1;
	$primerCAM;
	function primerCAM($apMaterno, $cont){
		return $apMaterno{$cont};
	}
	do{
		$caracter = primerCAM($apMaterno, $cont);
		$primerCAM = $caracter;
		$cont++;
	}while($caracter == 'A' || $caracter == 'E' || $caracter == 'I' || $caracter == 'O' || $caracter == 'U' || $caracter == ' ');

	$cont = 1;
	$primerCAM;
	function primerCANO($nombre, $cont){
		return $nombre{$cont};
	}
	do{
		$caracter = primerCANO($nombre, $cont);
		$primerCANO = $caracter;
		$cont++;
	}while($caracter == 'A' || $caracter == 'E' || $caracter == 'I' || $caracter == 'O' || $caracter == 'U' || $caracter == ' ');

	$x = rand(0,9);
	$y = rand(0,9);
	echo "<h2>La CURP es: </h2><br>";
	echo "<br>$curp$primerVocal$primerLAM$primerLAN$nanac$mes$dia$sexo$estado$primerCAP$primerCAM$primerCANO$x$y";

?>