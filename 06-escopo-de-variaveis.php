<?php 

//ESCOPO GLOBAL

$nome = "Daniel Lima";
$a = 1;
$b=3.5;
$c = 8;

function exibeNome(){
	global $nome;
	echo $nome;
}

exibeNome();
echo"<hr>";
////////////////

function exibeCidade(){
	global $cidade;// SERÁ ACESSIVEL EM QUALQUER LUGAR DO ESCOPO
	$cidade = "Paraguaçu";
}
exibeCidade();
echo $cidade;
echo"<hr>";

//////////////

function soma(){
	echo $GLOBALS['a'] +$GLOBALS['b']+$GLOBALS['c'] ;
}

soma();