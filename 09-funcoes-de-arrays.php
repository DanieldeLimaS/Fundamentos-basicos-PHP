<?php


/*
is_array(var) = verificar se uma determinada variavel á array
in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
array_keys($array) = retorna um novo array com as chaves do array passado como parametro
array_values($array) = retorna um novo array com os valores do array passado como parametro
array_merge($array1,$array2) agrega o conteudo de dois array
array_pop($array) = exclui a ultima posição de um array
array_shift($array) = exclui a primeira posição de um array
array_unshift(array, var) = adiciona um ou mais elementos no inicio do array
array_push(array, var) adiciona um ou mais elementos no final do array
array_combine(keys, values) = mescla os dois arrays passados
array_sum(array) = calcula a soma dos elementos de um array
explode("/", "11/12/2021") transforma string em array
implode("-", "$array")  transforma array em string
*/
echo '<b>IS_ARRAY(var)</b><br>';
$nomes = array("primo"=>"Daniel","irmão"=>"Felipe","visinho"=>"Daniel","amigo"=>"Jose","pai"=>"Ataide");
if(in_array("Daniel", $nomes)):
	echo "existe";

endif;
echo"<hr>";

//array_keys($array) = retorna um novo array com as chaves do array passado como parametro

echo '<b>ARRAY_KEYS($ARRAY)</b><br>';	
$keys = array_keys($nomes);
print_r($keys);
echo"<hr>";

//array_values($array) = retorna um novo array com os valores do array passado como parametro

echo'<b>ARRAY_VALUES($ARRAY)</b><br>';	
$values = array_values($nomes);
print_r($values);
echo"<hr>";

//array_merge($array1,$array2) agrega o conteudo de dois array
echo'<b>ARRAY_MERGE($ARRAY1,$ARRAY2)</b><br>';	
$carros = array("Camaro","Uno","Gol");
$motos =array("Pop100","CG-150cc","Hornet","CB1000r","XJ6");
$veiculos = array_merge($carros,$motos);

print_r($veiculos);
echo"<hr>";

//array_pop($array) = exclui a ultima posição de um array
echo'<b>ARRAY_POP($ARRAY)</b><br>';
print_r($carros);
echo"<br>";
echo "ultimo elemento excluido:  ".array_pop($carros); // vai mostrar o elemento que foi excluido
echo"<br>";
print_r($carros);
echo"<hr>";


//array_shift($array) = exclui a primeira posição de um array
echo'<b>ARRAY_SHIFT($ARRAY)</b><br>';
print_r($carros);
echo"<br>";
echo "primeiro elemento excluido:  ".array_shift($carros); // vai mostrar o elemento que foi excluido
echo"<br>";
print_r($carros);
echo"<hr>";



//array_unshift(array, var) = adiciona um ou mais elementos no inicio do array
echo'<b>ARRAY_UNSHIFT(ARRAY, VAR)</b><br>';
$frutas = array("Uva","Goiaba","Laranja","Morango","Melao");
print_r($frutas);	
array_unshift($frutas, "MANGA","ACEROLA","PESSEGO");	
echo"<br>";
print_r($frutas);	
echo"<hr>";

//array_push(array, var) adiciona um ou mais elementos no final do array
echo'<b>ARRAY_PUSH(ARRAY, VAR)</b><br>';
$frutas = array("Uva","Goiaba","Laranja","Morango","Melao");
print_r($frutas);	
array_push($frutas, "MANGA","ACEROLA","PESSEGO");	
echo"<br>";
print_r($frutas);	
echo "<hr>";

//array_combine(keys, values) = mescla os dois arrays passados
echo'<b>ARRAY_COMBINE(KEYS, VALUES)</b><br>';
$keys = array("Campeão","Vice","Terceiro");
$values = array("Vasco","Flamento","Botafogo");
$times = array_combine($keys, $values);
print_r($times);
echo"<hr>";

//array_sum(array) = calcula a soma dos elementos de um array
echo'<b>ARRAY_SUM(ARRAY)</b><br>';
$soma = array(1,2,3,4,5,6,7,8,9,10);
echo array_sum($soma);
echo "<hr>";


//explode("/", "11/12/2021") transforma string em array
echo'<b>EXPLODE("/", "11/12/2021")</b><br>';
$data = "30/12/2021";
$novadata = explode('/', $data);
echo "<br> <b>Exemplo 1</b> <br>";
print_r($novadata);

echo "<br> <b>Exemplo 2</b> <br>";
$nome = "Meu nome é Daniel de Lima dos Santos";
$novoNome = explode(" ", $nome);
print_r($novoNome);
echo"<hr>";

//implode("-", "$array")  transforma array em string

echo '<br> <b>IMPLODE("-", "$ARRAY")</b> <br>';
$nomes = array("Daniel","Rodrigo","Rita","Carlos","Talita","Jose");
$string =implode("|", $nomes);
echo $string;

