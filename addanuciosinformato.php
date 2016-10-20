<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recepción de los datos</title>
</head>
<body>
	<?php
	$conexion = mysqli_connect("localhost", "root", "","bd_proyecto1");

		//le decimos a la conexión que los datos los devuelva diréctamente en utf8, así no hay que usar htmlentities
		$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

		if (!$conexion) {
		    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
		//llamamos a la función extract para extraer los datos del array $_REQUEST y lo meta todo en las variables del mismo nombre del html
		extract($_REQUEST);

		//$sql = "SELECT * FROM anunci ";
		$inst = "INSERT INTO anunci (anu_titol, anu_data_anunci, anu_data_robatori, anu_ubicacio_robatori, anu_descripcio_robatori, anu_marca, anu_model, anu_color, anu_antiguitat, anu_descripcio, anu_numero_serie, anu_foto, anu_compensacio)";

		$inst .= " VALUES (
		'".$tituloanuncio."', 
		'".$fecha_anuncio."', 
		'".$fecha_robo."', 
		'".$lugar."',
		'".$descripcion_robo."',
		'".$marca."',
		'".$modelo."',
		'".$color."', 
		'".$Antiguedad."', 
		'".$descripcion_bici."',
		'".$numeroserie."',
		'".$fotos."',
		".$Compesancion.")";

		echo "$inst <br/><br/>";
		//echo "$fotos";
		mysqli_query($conexion, $inst);
		/*mirar la conexion
		$crear = mysql_query($conexion, $insertar);
		
		if(mysqli_num_rows($crear)!=0){
			echo "Se han creado  " . mysqli_num_rows($crear) . " anuncio<br/><br/>";
				} else {
			echo "No se ha creado nada";
		}
		*/
	
		mysqli_close($conexion);

		

	?>
</body>
</html>