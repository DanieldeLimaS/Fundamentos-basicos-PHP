<?php
//superglobais
/*
$GLOBALS - É USADA PARA ACESSAR VARIAVEIS GLOBAIS DE QUALQUER DO PHP, ARMAZENA TODAS AS VARIAVEIS EM ARRAYS
$_SERVER  - É UM ARRAY QUE CONTEM VARIOS INDICES
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION


*/



//$GLOBALS - É USADA PARA ACESSAR VARIAVEIS GLOBAIS DE QUALQUER DO PHP, ARMAZENA TODAS AS VARIAVEIS EM ARRAYS
echo '<b>$GLOBALS - É USADA PARA ACESSAR VARIAVEIS GLOBAIS DE QUALQUER DO PHP, ARMAZENA TODAS AS VARIAVEIS EM ARRAYS</b><br><br>';
$x = 10;
$y = 15;
function soma(){
	echo $GLOBALS['x']+ $GLOBALS['y'];
}
soma();

echo "<hr>";


echo '<b>$_SERVER - É UM ARRAY QUE CONTEM VARIOS INDICES </b><br><br>';

	echo $_SERVER['PHP_SELF']."<BR>";//nome do arquivo do script que está executando

	echo $_SERVER['SERVER_ADDR']."<BR>";//O endereço IP do servidor onde está o script em execução.

	echo $_SERVER['SERVER_NAME']."<BR>";//O nome host do servidor onde o script atual é executado. Se o script está rodando em um host virtual, este será o valor definido para aquele host virtual.

	echo $_SERVER['SERVER_SOFTWARE']."<BR>";//A string de identificação do servidor, fornecida nos headers quando respondendo a requests.

	echo $_SERVER['SERVER_PROTOCOL']."<BR>";//Nome e número de revisão do protocolo de informação pelo qual a página foi requerida, por exemplo 'HTTP/1.0';

	echo $_SERVER['REQUEST_METHOD']."<BR>";//Contém o método de request utilizando para acessar a página. Geralmente 'GET', 'HEAD', 'POST' ou 'PUT'.

echo "<hr><br>";

echo '<b>USANDO O $_POST E $_GET </b><br>';