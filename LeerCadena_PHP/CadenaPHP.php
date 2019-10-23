<?php
	$cadena = $_POST['caja_cadena'];
	$letra = $_POST['caja_letra'];
	
	echo "<h3> Leer cadena con PHP </h3>";
	
	
	function primer($cadena, $c){
		return $cadena{$c};
	}
	
	function contarVocales($cadena){
		$contador = 0;
		$voc;
		for($i = 0; $i < strlen($cadena); $i++){
			$voc = primer($cadena, $i);
			if($voc == 'A'|| $voc == 'E'|| $voc == 'I'|| $voc == 'O'|| $voc == 'U'||
		 		$voc == 'a'|| $voc == 'e'|| $voc == 'i'|| $voc == 'o'|| $voc == 'u'){
				$contador ++;
			}
		}
		echo "El número de vocales es: " .$contador ."<br>";
	}
	contarVocales($cadena);

	function contarConsonantes($cadena){
		$contador = 0;
		$consonante;
		for($i = 0; $i < strlen($cadena); $i++){
			$consonante = primer($cadena, $i);
			if($consonante == 'A'|| $consonante == 'E'|| $consonante == 'I'|| $consonante == 'O'|| $consonante == 'U'||
		 	$consonante == 'a'|| $consonante == 'e'|| $consonante == 'i'|| $consonante == 'o'|| $consonante == 'u' || $consonante == ' '){
			
			}else{
				$contador++;
			}
		}
		echo "El número de consonantes es: " .$contador ."<br>";
	}
	contarConsonantes($cadena);

	function contarLetra($cadena, $letra){
		$contador = 0;
		$let;
		for($i = 0; $i< strlen($cadena); $i++){
			$let = primer($cadena, $i);
			if($let == $letra){
				$contador++;
			}
		}
		echo "El número de veces que aparece la letra es: " .$contador ."<br>";
	}
	contarLetra($cadena, $letra);
	echo "La cadena loca: ";
	function cadenaLoca($cadena){
		$cadLoca;
		for($i = 0; $i < strlen($cadena); $i++ ){
			$cadLoca = primer($cadena, $i);
			if($i%2 == 0){
				$cadLoca = strtoupper($cadLoca);
				echo "$cadLoca";
			}else{
				$cadLoca = strtolower($cadLoca);
				echo "$cadLoca";
			}
		}
	}

	 cadenaLoca($cadena);
?>