<?php 
//Laço de repetição em FOR usado quando voce tem um numero de repetições que será necessario realizar para retornar valores
for ($i=0; $i <10 ; $i++) { 
	# code...
	echo "Numero $i <br>";
}

echo "<hr>";

$lista = array("arroz","feijão", "oleo","Café");
// Lista de repetição com FOREACH
// é semelhante ao uso do FOR
foreach ($lista as $indice =>$valor) {
	# code...
	echo $indice." - ".$valor."<br>";
}