<?php
//CONSTANTES
//o valor nao pode ser alterado
//SÃO DECLARADAS SEMPRE COMO MAIUSCULAS
// as constantes são globais e pode ser usada em todo o escopo
define("NOME", "Daniel de lima dos Santos");
define("IDADE", 27);
define("ALTURA", 1.75);
define("CASADO", TRUE);

define("TIMES", ["Vasco","São Paulo", "Flamengo"]);
var_dump(NOME);
var_dump(IDADE);
var_dump(ALTURA);
var_dump(CASADO);

echo 'Meu nome é '.NOME.' e a minha idade é '.IDADE.' e minha altura é '.ALTURA;
echo"<HR>";
echo TIMES[0];
var_dump(TIMES);
echo"<hr>";

function exibeNome(){
	echo NOME;
}
exibeNome();

