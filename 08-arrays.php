<?php

//ARRAYS

$carros = array(1=>"BMW",4=>"Veloster",8=>"GOL");
$carros[] = "AMAROK";// adicionando elementos
$carros[10] = "Camaro amarelo";
print_r($carros);//usado para exibir arrays
echo"<br>";

echo $carros[1];// com echo exibe somente com indices
echo"<hr>";


$motos = array();
$motos[]="Yamaha";
$motos[]="Honda";
$motos[10]="Suzuki";

echo $motos[10];
echo"<br><hr>";

$clientes = ["Rodrigo","Daniel","Felipe","José"];
print_r($clientes);


//COUNT
echo"<hr> Contanto elementos<br>";
$totalCarros = count($carros);
$totalMotos = count($motos);
$totalClientes = count($clientes);
echo "*Total de carros é: $totalCarros<br>";
echo "*Total de Motos é: $totalMotos<br>";
echo "*Total de Clientes é: $totalClientes<br>";

//Foreach
echo"<hr><br> Lista de carros<br>";
foreach ($carros as $valor) {
	# code...
	echo $valor."<br>";
}
echo"<hr><br> Lista de Motos<br>";
foreach ($motos as $valor) {
	# code...
	echo $valor."<br>";
}

echo"<hr><br> Lista de Clientes<br>";
foreach ($clientes as $valor) {
	# code...
	echo $valor."<br>";
}
echo"<hr>";
///////////////////////////////////
//ARRAYS ASSOCIATIVOS
$pessoa = array("nome"=>"Rodrigo", "idade"=>23, "altura"=>1.75);
$pessoa["cidade"]="Itabuna";
echo $pessoa["nome"];
print_r($pessoa);
echo"<br>";

foreach ($pessoa as $indice => $valor) {
	# code...
	echo $indice.":" .$valor."<br>";
}



////////////////////
//   ARRAYS MULTIDIMENSSIONAIS
echo "<hr><hr>";
$times = array('cariocas' => array('campeao'=>'vasco','tetra'=>'flamengo','vice'=>'botafogo','terceiro'=>'teste' ),
	'paulistas'=>array('primeiro'=>'santos','segundo'=>'sao paulo','terceiro'=>'palmeiras'),
	'baianos'=>array('quarto'=>'bathia','quinto'=>'vitoria','sexto'=>'itabuna')
);

echo $times['cariocas']['campeao'];
echo "<hr>";

foreach ($times['cariocas'] as $indice => $valor) {
	# code...

	echo $indice.":".$valor."<br>";
}
echo"<br>--------------------<br>";
foreach ($times['paulistas'] as $indice => $valor) {
	# code...

	echo $indice.":".$valor."<br>";
}
echo"<br>--------------------<br>";
foreach ($times['baianos'] as $indice => $valor) {
	# code...

	echo $indice.":".$valor."<br>";
}