<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Semana 1</title>
	<link rel="stylesheet" href="css/Style.css">
</head>

<body>
	<div class="titulo">
		<header>
			<h1>Curso de PHP - Semana 1</h1>
		</header>
	</div>
	<div class="main">
		<h2>Calculadora</h2>
		<div class="form">
			<form action="Resultado.php" method="post">
				<select name="operador" id="">
					<option value="suma">Suma</option>
					<option value="resta">Resta</option>
					<option value="multiplicacion">Multiplicaci&Oacute;n</option>
					<option value="division">Divisi&oacute;n</option>
				</select>
				<hr>
		
					<p>Ingresa tu pimer n&uacute;mero: <br></p>
					<input type="text" name="valor1"> <br>
					<p>Ingresa tu segundo n&uacute;mero: <br></p>
					<input type="text" name="valor2"> <br>
				<hr>
					<input type="reset" value="Borrar">
					<input type="submit" value="Enviar">
			</form>
		</div>
	</div>
	<footer>
		<div>
			<p>
				Diego Navarro - PHP 2017
			</p>
		</div>
	</footer>
</body>

</html>
