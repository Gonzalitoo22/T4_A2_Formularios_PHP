<?php
	$decimal = $_POST['caja_decimal'];

	$binario = decbin($decimal);
	
	echo "<h3> Conversión de números</h3>";
	echo "El número decimal es: " .$decimal ."<br>";
	echo "El número binario es: " .$binario ."<br>";
	echo "El complemento A1 del número binario es: ";
	
	function primer($binario, $c){
		return $binario{$c};
	}
	
	function complemento($binario){
		$contador = 0;
		$entrada;
		$uno;
		$cero;
		$comAU = "";
		for($i = 0; $i < strlen($binario); $i++){
			$entrada = primer($binario, $i);
			if($entrada == 1 ){
				$cero = 0;
				$comAU = $comAU . "0";
			}
			else{
				$uno = 1;
				$comAU = $comAU . "1";
			}
		}
		echo " $comAU";
		return $comAU;
	}
	
	$comAU = complemento($binario);

	function cambiar($comAU){
		$entrada;
		$comAD = "";
		for ($i=0; $i <  strlen($comAU); $i++) { 
			$entrada = primer($comAU, $i);
			$comAD = $entrada . $comAD;
		}
		return $comAD;
	}

	$cambio = cambiar($comAU);

	function complementoD($cambio){
		$entrada;
		$AD = 1;
		$comAD = "";
		
		for($i = 0; $i < strlen($cambio); $i++){
			$entrada = primer($cambio, $i);
			if($entrada == 1 && $AD == 1){
				$AD = 1;
				$comAD = "0" . $comAD;
			}
			else if ($entrada == 0 && $AD == 1) {
				$AD = 0;
				$comAD = "1" . $comAD;
			} elseif ($entrada == 1 && $AD == 0) {
				$AD = 0;
				$comAD = $entrada . $comAD;
			}elseif ($entrada == 0 && $AD == 0) {
				$AD = 0;
				$comAD = $entrada . $comAD;
			}

		}
		echo $comAD;
		return $comAD;
	}
	echo "<br>El complemento A2 del número binario es: ";
	complementoD($cambio);

	
?>