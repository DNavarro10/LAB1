<?php

	if ($_POST["valor1"] != "" and $_POST["valor2"] !=""){
		if($_POST["operador"] == "suma"){
			print ($resultado = $_POST["valor1"] + $_POST["valor2"]);
			print ('<br/><a href="index.php">Volver</a>');
		}
			elseif ($_POST["operador"] == "resta"){
				print ($resultado = $_POST["valor1"] - $_POST["valor2"]);
				print ('<br/><a href="index.php">Volver</a>');
		}
			elseif ($_POST["operador"] == "multiplicacion"){
				print ($resultado = $_POST["valor1"] * $_POST["valor2"]);
				print ('<br/><a href="index.php">Volver</a>');
		}
			elseif ($_POST["operador"] == "division"){
				if ($_POST["valor2"] == "0"){
					print("Error de divisi&oacute;n por cero ");
					print('<br/><a href="index.php">Volver</a>');
				}
				else{
					print($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
					print('<br/><a href="index.php">Volver</a>');
				}				
			}
?>