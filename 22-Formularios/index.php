
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
	
		FILTROS DE LIMPESA - SANITIZAÇÃO
		Funções(filter_input - filter_var)

		FILTER_SANITIE_ESPECIAL_CHARS
		FILTER_SANITIZE_INT
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_URL


		*/
	 ?>

	 <?php 
	 // valida se existe esse indice enviar-formulario ou seja, se alguem clicar ele irá cair aqui
	 	if(isset($_POST['enviar-formulario'])):
	 		//array de erros
	 		$erros=array();
	 		//SANITIZE


	 		//PROCESSO DE VALIDAÇÕES DOS CAMPOS
	 		$nome=filter_input(INPUT_POST, "nome");
	 		if(empty($nome))
	 			$erros[]="Informe um nome";

	 		if(!$email=filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL))
	 			$erros[]="Email informado está invalido.";


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
	 	Idade:<input type="text" name="nome"><br>
	 	Email:<input type="Email" name="email"><br>
	 	URL:<input type="text" name="url"><br>
	 	<button type="submit" name="enviar-formulario">Enviar</button><br>
	 	
	 </form>

</body>
</html>

