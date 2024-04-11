<?php 
$num1 = 2;
$num2 = 3;
$num3 = 4;

	if($num1 <$num2){
	$temp=$num1;
	$num1=$num2;
	}
	if($num2 <$num3){
	$num2=$num3;
	}
	else{
	$temp=$num3;

	}
	echo "A ordem descrescente dos números é: $num3, $num2, $num1";	
	
 ?>