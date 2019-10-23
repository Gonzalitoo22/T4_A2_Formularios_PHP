<?php
	$decimal = $_POST['caja_decimal'];

	$binario = decbin($decimal);
	$octal = decoct($decimal);
	$hex = dechex($decimal);

	echo "<h3> Conversión de números</h3>";
	echo "El número decimal es: " .$decimal ."<br>";
	echo "El número binario es: " .$binario ."<br>";
	echo "El número octal es: " .$octal ."<br>";
	echo "El número hexadecimal es: " .$hex ."<br>";

?>