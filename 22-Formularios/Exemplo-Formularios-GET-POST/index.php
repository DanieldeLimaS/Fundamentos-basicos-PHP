<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="dados-post.php" method="POST">
	Usando POST<br>

	Nome:<input type="text" name="nome"><br>
	Email:<input type="Email" name="Email"><br>
	<button type="submit" name="Enviar">Enviar</button>

</form>

<form action="dados-get.php" method="GET">
	Usando GET<br>
	Nome:<input type="text" name="nome"><br>
	Email:<input type="Email" name="Email"><br>
	<button type="submit" name="Enviar">Enviar</button>


</form>
<a href="dados-get.php?idade=22&sobrenome=Santos">Enviar Dados</a>

</body>
</html>