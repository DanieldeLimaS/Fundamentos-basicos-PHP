<?php


$nome=$_GET['nome'];
$email = $_GET['Email'];
$idade = $_GET['idade'];
$sobrenome = $_GET['sobrenome'];
echo "seu nome é $nome e o seu email é $email<br>
sua idade é $idade e o seu sobrenome é $sobrenome";
var_dump($_GET);