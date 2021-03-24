<?php 

//Criando Funções
function exibeNome(){
	echo "Meu nome é Daniel";
}

//para retornar as informações de uma function é necessario chamar ela
 exibeNome();

echo"<hr>";
echo "<b>Exibe com parametros</b><br>";
function exibeNomeComParametros($nome){
	echo "Meu nome é $nome";
}

exibeNomeComParametros("Daniel de Lima dos Santos");
echo"<hr>";

//function para calcular media
echo "<b>Calcular media</b><br>";
function calculaMedia($nome,$n1,$n2,$n3){
	$media = ($n1+$n2+$n3)/3;
	if($media>=6):
		echo "$nome foi aprovado com a média ".number_format($media,2,",",".");
	else:
		echo "$nome foi reprovado";
	endif;
}
calculaMedia("Jose",6,8,9);
