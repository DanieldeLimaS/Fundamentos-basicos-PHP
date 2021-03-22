<?php 
$nome ='Daniel de Lima';
//tudo que estiver em aspas simples, o server vai interpretar como texto
//nesse caso tem que concatenar com o ponto
//para adicionar uma aspas simpes dentro desse caso, te que colocar \' conteudo\'
echo'Meu nome é '.$nome.' e minha idade é \'23\'<br>';

echo 'Meu nome é "'.$nome.'"<br>';

echo "Meu nome é \"$nome\"";