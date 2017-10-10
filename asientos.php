
<?php include('conexion.php');
	$columna = 4;
	$asientos = 44;
	if ($columna>0 && $asientos>0)
	{				//
				echo "<br>";
	?>

<center>
	<table class="table table-bordered table-condensed">
		<tr>
		<?php
			$num = 1;
			$query="SELECT NroAsiento FROM `reserva` where IdTramo=4 ORDER BY `reserva`.`NroAsiento` ASC";
            $resultado= mysql_query($query, $conect);
            $fila = mysql_fetch_assoc($resultado);
			while($num <= $asientos)
			{   echo "<tr class='tab'>";
				for ($columna=1; $columna <=4 ; $columna++) { 
					# code...
					echo "<td class='asie'>";
		                        
                      if($fila['NroAsiento']==$num){
                           echo "<input class='btn btn-danger'  type='button' name='' value='ocupado' >";
                           $fila = mysql_fetch_assoc($resultado);
                          }
                        else{
                          echo "<input class='btn btn-default' type='button' name='' value='N°".$num."' >";
                         }
		                      $num++;
		            echo "<td>";
				}
				echo "</tr>";
				
			}mysql_free_result($resultado);
	}
	else echo 'introdusca valores positivos mayores a 0';
		?>
		</tr>
	</table>
</center>
