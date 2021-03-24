<?php 
// Funções para Strings
/*

strtoupper - deixa o texto em caixa alta(maiusculo)
strtolower - deixa o texto em caixa baixa(minusculo)
substr - retorma uma parte de uma string
str_pad - complementa uma outra string com uma quantidade especificada de caracteres
str_repeat - serve para repetir string
strlen - retorna a quantidade de digitos ou numero de posições de uma string
str_replace - serve para substituir uma palavra em um texto
str_pos - exibe a posição de uma string*/



//strtoupper - deixa o texto em caixa alta(maiusculo)
$nome = "Daniel de Lima";
$maiusculo = strtoupper($nome);
echo "<b>STRTOUPPER</b><BR>";
echo $maiusculo;
echo "<hr>";

//strtolower - deixa o texto em caixa baixa(minusculo)
echo "<b>STRTOLOWER</b><BR>";
$nome = strtoupper($nome);//converte para maiusculo
echo $nome;
echo "<br>";
$minusculo = strtolower($nome);//coverte para minusculo
echo $minusculo;
echo "<hr>";

//substr - retorma uma parte de uma string
echo "<b>SUBSTR</b><BR>";
echo $nome;
echo "<br>";
$substr = substr($nome, 9,3);//retorna valor após 4 caracteres
echo $substr;
echo "<hr>";

echo "<b>STRPAD</b><BR>";
echo $nome;
echo "<br><br>";
//completa com numero de 20 caractetes no comprimento, Totalizando 20 caractetes
$strpad1 = str_pad($nome, 20,"*",STR_PAD_LEFT);//ACRESCENTA PARA A ESQUERDA
$strpad2 = str_pad($nome, 20,"*",STR_PAD_RIGHT);//ACRESCENTA PARA A DIREITA
$strpad3 = str_pad($nome, 20,"*",STR_PAD_BOTH);//ACRESCENTA PARA OS DOIS LADOS
echo $strpad1;
echo"<br>";
echo $strpad2;
echo"<br>";
echo $strpad3;
echo"<br>";
echo "<hr>";


//str_repeat - serve para repetir string
echo "<b>STR_REPEAT</b><br>";
$string = str_repeat("sucesso!", 5);
echo $string;
echo "<hr>";

//strlen - retorna a quantidade de digitos ou numero de posições de uma string

echo "<b>STRLEN</b><br>";
$mensagem = "Olá mundo";
echo "quantidade de posições na string:".	strlen($mensagem);
echo "<hr>";

//str_replace - serve para substituir uma palavra em um texto
echo "<b>STR_REPLACE</b><br>";
$texto="Usando Funções para strings";
$novotexto= str_replace("Funções", "(FUNCOES)",$texto);
echo $novotexto;
echo "<hr>";

//str_pos - exibe a posição de uma string
echo "<b>STR_POS</b><br>";
echo strpos($texto, "strings");
