<?php
	$operacion = $_POST['caja_operacion'];

	echo "<h3> Caja operación </h3>";
	
	
	function primer($operacion, $c){
		return $operacion{$c};
	}
	
	function contarSuma($operacion){
		$contador = 0;
		$num;
		$n1;
		$n2;
		$res = 0.0;
		for($i = 0; $i < strlen($operacion); $i++){
			$op = primer($operacion, $i);
			if($op == '+'){
				$n1 = (double) substr($operacion, 0, $i);
				$n2 = (double) substr($operacion, $i+1, strlen($operacion));
				$res = $n1 + $n2;
			}elseif($op == '-'){
				$n1 = (double) substr($operacion, 0, $i);
				$n2 = (double) substr($operacion, $i+1, strlen($operacion));
				$res = $n1 - $n2;
			}
			elseif($op == '*'){
				$n1 = (double) substr($operacion, 0, $i);
				$n2 = (double) substr($operacion, $i+1, strlen($operacion));
				$res = $n1 * $n2;
			}

			elseif($op == '/'){
				$n1 = (double) substr($operacion, 0, $i);
				$n2 = (double) substr($operacion, $i+1, strlen($operacion));
				$res = $n1 / $n2;
			}
		}

		echo "El resultado de la operación es: " . $res ."<br>";
	}
	contarSuma($operacion);

	
?>