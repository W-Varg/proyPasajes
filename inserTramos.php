<?php //Ejemplo aprenderaprogramar.com
	$Origen = $_POST['Origen'];
	$Destino = $_POST['Destino'];
	$Precio= $_POST['Precio'];

		$con = mysql_connect('localhost','root','');
		mysql_select_db("venta_pasajes", $con) or die ("No se pudo conectar a la base de datos");
		$insertar=("INSERT INTO tramos VALUES ('','$Origen','$Destino',$Precio,5)");

			$resultado= mysql_query($insertar);
			if (!$resultado) {
				echo '<script>alert("ERROR: VUELVA A INSERTAR LOS DATOS");
						window.history.go(-1);</script>';
			}else{
			echo "<script>alert('REGISTRADO EXITOSAMENTE');
					location.href='regTramos.php'</script>";
			}
		


	mysql_close($con); // Cerramos la conexion con la base de datos
	
?>