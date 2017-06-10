<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Laboratorio 1</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
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
			<form action="Resultado.php" method="post" class="form">
				<p>Elegir operaci&oacute;n</p>
				<select name="operador" id="operaciones">
					<option value="suma">Suma</option>
					<option value="resta">Resta</option>
					<option value="multiplicacion">Multiplicaci&oacute;n</option>
					<option value="division">Divisi&oacute;n</option>
				</select>
					<p>Ingresa tu pimer n&uacute;mero: <br></p>
					<input type="text" name="valor1" class="text"> <br>
					<p>Ingresa tu segundo n&uacute;mero: <br></p>
					<input type="text" name="valor2" class="text"> <br>
					<input type="reset" value="Borrar" id="borrar">
					<input type="submit" value="Enviar" id="enviar">
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
