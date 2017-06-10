<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/Style.css">
</head>
<body>
<div class="titulo">
		<header>
			<h1>Resultado</h1>
		</header>
	</div>
<div class="main">
	
		<?php

		if ($_POST["valor1"] != "" and $_POST["valor2"] !=""){
			if($_POST["operador"] == "suma"){
				print ($resultado = $_POST["valor1"] + $_POST["valor2"]);
				print ('<br/><a href="calculadora.php">Volver</a>');
			}
				elseif ($_POST["operador"] == "resta"){
					print ($resultado = $_POST["valor1"] - $_POST["valor2"]);
					print ('<br/><a href="calculadora.php">Volver</a>');
			}
				elseif ($_POST["operador"] == "multiplicacion"){
					print ($resultado = $_POST["valor1"] * $_POST["valor2"]);
					print ('<br/><a href="calculadora.php">Volver</a>');
			}
				elseif ($_POST["operador"] == "division"){
					if ($_POST["valor2"] == "0"){
						print("Error de divisi&oacute;n por cero ");
						print('<br/><a href="calculadora.php">Volver</a>');
					}
					else{
						print($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
						print('<br/><a href="calculadora.php">Volver</a>');
					}				
				}
		}
	else{
		print("Ingresa alg&uacute;n valor");
		print('<br/><a href="calculadora.php">Volver</a>');

	}
	?>
</div>
</body>
</html>
	


