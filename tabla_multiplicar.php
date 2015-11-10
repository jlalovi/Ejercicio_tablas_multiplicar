<!DOCTYPE html>
<html>
	<head>
		<title>Tabla de pares e impares</title>
	</head>
	<body>
		<h1>Tabla de multiplicar</h1>
		<?php
			for ($tabla=1; $tabla<=10; $tabla++) {
				echo '<div style="float:left"><table border="1px solid black">';
				echo '<tr><th colspan=2 style = "background-color: red; color: white;">Tabla del '.$tabla.'</th></tr>';
				for ($i=1; $i <= 10; $i++) {
					//Por cada iteración, creo una línea, coloreada si es prima:
					echo "<tr>";						
					for ($j=0; $j < 3 ; $j++) {
						//Compruebo en qué celda me encuentro en cada iteración de este segundo bucle:
						if ($j==0) {
							echo "<td>".$tabla." x ".$i."</td>"; //Imprimo el número correspondiente a la celda
						}
						if ($j==1) { //Celdas con el resultado 
							echo "<td>".$i*$tabla."</td>";
						}
					}
					echo "</tr>";
				}
				echo '</table></div>';
			}
		?>			
	</body>
</html>