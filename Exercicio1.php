<?php

	$valor1=10;
	$valor2=02;

	$soma= $valor1+$valor2;

	if ($soma > 20){

	 $soma = $soma + 8;

	}
	elseif ($soma <= 20){

	 $soma = $soma - 5;

	}

	echo ("A soma dos valores é: $soma");

?>