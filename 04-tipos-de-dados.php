<?php 
/***************** Escalares ***************/

$nome="Olá Mundo";
var_dump($nome);
if(is_string($nome)):
	echo "é uma string";
else:
	echo "Não é uma string";
endif;

echo"<hr>";

//int
$idade = 17;
var_dump($idade);
if(is_int($idade)):
	echo "é um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

//Float
$valor = 17.5;
var_dump($valor);
if(is_float($valor)):
	echo "é um Float";
else:
	echo "Não é um Float";
endif;
echo "<hr>";

//Boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
	echo "é um boleano";
else:
	echo "Não é um boleano";
endif;
/************************* dados Compostos -> ARRAY *********************/

$carros = array("Gol","Camaro","Fusca",true,758.5,456);
var_dump($carros);
echo"<hr>";

//Object
/**
 * 
 */
class Cliente 
{
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
	
}

$cliente = new Cliente();
$cliente->atribuirNome("daniel de lima dos santos");
var_dump($cliente);
if(is_object($cliente)):
	echo "é um Objeto";
else:
	echo "Não é um Objeto";
endif;

/************** ESPECIAIS ******************/
echo"<hr>";
$cidade = null;
var_dump($cidade);

