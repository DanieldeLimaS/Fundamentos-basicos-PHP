<?php 
//OPERADORES LOGICOS
//comparações entre expressoes
/*
	e (&& - and)
	ou (|| - or)
	ou exclusivo (xor)
	negação (!)
*/
	$idade = 25;
	$nome = "Daniel";

	echo "Operador (AND - &&)<br>";
	if(($idade ==25) and($nome=="Daniel")):
		echo "é verdadeiro";
	else: echo "é falso";
	endif;
	echo "<hr>";
/////////////////////////

	echo "Operador (or - ||) um ou os dois podem ser verdadeiro<br>";
	if(($idade ==25) or($nome=="Daniel")):
		echo "é verdadeiro";
	else: echo "é falso";
	endif;
	echo "<hr>";
	/////////////////////////

	echo "Operador (xor)  ou um ou outro tem que ser verdadeiro(somente um)<br>";
	if(($idade ==25) xor($nome=="Daniel")):
		echo "é verdadeiro";
	else: echo "é falso";
	endif;
	echo "<hr>";
	/////////////////////////

	echo "Operador (AND - &&)<br>";
	if(!($idade ==25) and !($nome=="Daniel")):
		echo "é verdadeiro";
	else: echo "é falso";
	endif;
	echo "<hr>";