<?php

	$valor=22;

	
	if ($valor %10 == 0){

	 echo ("O valor inserido é divisivel por 10");

	}
	elseif ($valor %5 == 0){

	 echo ("O valor inserido é divisivel por 5");

	}

	elseif ($valor %2 == 0){

	 echo ("O valor inserido é divisivel por 2");
	}

	else
	echo ("A valor inserido não é divisivel por 10, 5 ou 2");

?>