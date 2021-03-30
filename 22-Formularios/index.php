
<!DOCTYPE html>
<html>
<head>
	<title>Validações PHP</title>
</head>
<body>
	<?php 
		/* VALIDAÇÕES
		Funções(filter_input - filter_var)
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_URL
		*/
	 ?>

	 <?php 
	 // valida se existe esse indice enviar-formulario ou seja, se alguem clicar ele irá cair aqui
	 	if(isset($_POST['enviar-formulario'])):
	 		//array de erros
	 		$erros=array();
	 		//PROCESSO DE VALIDAÇÕES DOS CAMPOS
	 		if(!$idade=filter_input(INPUT_POST, "idade",FILTER_VALIDATE_INT))
	 			$erros[]="Idade precisa ser um numero inteiro.";

	 		if(!$email=filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL))
	 			$erros[]="Email informado está invalido.";

	 		if(!$peso=filter_input(INPUT_POST, "peso",FILTER_VALIDATE_FLOAT))
	 			$erros[]="O peso precisa ser float.";

	 		if(!$ip=filter_input(INPUT_POST, "ip",FILTER_VALIDATE_IP))
	 			$erros[]="IP inválido.";

	 		if(!$url=filter_input(INPUT_POST, "url",FILTER_VALIDATE_URL))
	 			$erros[]="Informe uma URL válida.";
	 	
	 		//EXIBE MENSAGENS NA PAGINA
	 		if(!empty($erros)):
	 			foreach ($erros as $erro ) :
	 				echo "<li> $erro</li>";
	 			endforeach;
	 		else:
	 			echo "Parabens, seus dados estão corretos.";
	 		endif;
	 	endif;
	 ?>
	 
	 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	 	Idade:<input type="text" name="idade"><br>
	 	Email:<input type="Email" name="email"><br>
	 	Peso:<input type="text" name="peso"><br>
	 	IP:<input type="text" name="ip"><br>
	 	URL:<input type="text" name="url"><br>
	 	<button type="submit" name="enviar-formulario">Enviar</button><br>
	 	
	 </form>

</body>
</html>

