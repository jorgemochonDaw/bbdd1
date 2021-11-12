<html>

<head>
	<title>Ejemplo bases de datos</title>
</head>

<body>
	<?php
	include('./conexionBBDD.php');
	$resultado = mysqli_query($conexion, "select * from calzado");
	$numr = mysqli_num_rows($resultado);
	mysqli_close($conexion);
	?>
	<header>
		<h1>Conexion a base de datos</h1>
	</header>

	<table style="border:1px solid black">
		<tr>
			<th>Calzado</th>
		</tr>
		<tr>
			<td>
				id
			</td>
			<td>
				talla
			</td>
			<td>
				precio
			</td>
			<td>
				marca
			</td>
			<td>
				color
			</td>
		</tr>
		<?php
		if ($numr > 0) {
			for ($i = 0; $i < $numr; $i++) {
				echo "<tr>";
				/* El resultado es realmente una matriz y voy cogiendo por filas con esa función*/
				$fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

				/* Para concatenar string utilzo el .*/
				echo "<td>" . $fila["id"] . "</td>";
				echo "<td>" . $fila["talla"] . "</td>";
				echo "<td>" . $fila["precio"] . "</td>";
				echo "<td>" . $fila["marca"] . "</td>";
				echo "<td>" . $fila["color"] . "</td>";
				echo "</tr>";
			}
		}
		?>

	</table>
	<p><a href="ejercicio11.php">Ver ropa</a></p>
</body>

</html>