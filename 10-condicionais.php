<?php
/*
*Condicionais
*	if
*	else
*	elseif
*/
 
$numero = 15;
if($numero ==10):
	echo "é 10";
elseif($numero ==15):
	echo "é 15";
	else: echo "é diferente de 10";
	endif;

	echo "<hr>";

	$media =6;
	echo ($media >=7)?"Aprovado":"Reprovado";

	echo "<hr>";
	echo "<br><b>Condicionais, Switch e case</b><br>";
	echo "<br>";

	$cor = "vermelhso";
	switch ($cor) {
		case 'vermelho':
		# code...
		echo "é vermelho";
		break;
		case 'verde':
			# code...
		echo "a cor escolhida foi verde";
		break;
		case 'azul':
		# code...
		echo "A cor escolhida foi azul";
		break;

		default:
		echo "a cor escolhida nao é valida";
		break;

	}