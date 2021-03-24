<?php
//Funções para Números
/*
	number_format - formata o valor com numero de casas decimais e o tipo de caracteres usado para casas decimais após a virgula
	round - serve para arrendodar valores
	ceil - arredonda pra cima
	floor - arredonda pra baixo
	rand - gera ramdomico(aleatorio)
*/

//number_format - formata o valor com numero de casas decimais e o tipo de caracteres usado para casas decimais após a virgula
echo "<b>number_format()</b><br>";
$db = 123.45;
$preco = number_format($db,2,",",".");
echo "o valor do produto é R$ $preco";
echo "<hr>";

// round - serve para arrendodar valores automaticamente
echo "<b> round</b><br>";
$preco1=123.49;
$preco2=123.5;
echo "R$ ".round($preco1)."<br>R$ ".round($preco2);
echo "<hr>";
//ceil - arredonda pra cima
echo "<b>ceil</b><br>";
echo "R$ ".ceil($preco1)."<br>R$ ".ceil($preco2);
echo "<hr>";

//floor - arredonda sempre para baixo
echo "<b>floor</b><br>";
echo "R$ ".floor($preco1)."<br>R$ ".floor($preco2);
echo "<hr>";
//gera ramdomico(aleatorio)
echo "<b>rand</b><br>";
for ($i=0; $i < 5; $i++) { 
	# code...
	echo rand(1,50)."<br>";
}
