<?php 
	
	$idade = 21;
	$altura = 1.67;
	$sexo = "F";
	$maiorA = 1.80;
	$menorA = 1.50;
	$maiorI = 21;
	$menorI = 15;
	$soma = 0;

	for($i=0; $i<50; $i++){
		if ($altura > $maiorA) {
			$maiorA = $altura;	
		}
		if ($altura < $menorA) {
			$menorA = $altura;
		}
		if($sexo == "F"){
			$soma = $soma + $altura;
		}
		if ($sexo == "M" && $idade > $maiorI) {
			$maiorI = $idade;
		}
		if ($sexo == "F" && $idade < $menorI) {
			$menorI = $idade;
		}
	}
	echo "A maior altura é $maiorA<br/>";
	echo "A menor altura é $menorA<br/>";
	$media = 0.0;
	$media = $soma/$i;
	echo "A média de altura das mulheres é $media<br/>";
	echo "A idade do homem mais velho é $maiorI<br/>";
	echo "A idade da mulher mais nova é $menorI<br/>";

 ?>