<?php
include 'conexion.php';
$conect = new Connection();

?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Panel de Administracion de la Empresa</h2>
  <p>detalle de la empresa</p>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
    <li><a data-toggle="pill" href="#ventas">ventas</a></li>
    <li><a data-toggle="pill" href="#buses">buses</a></li>
    <li><a data-toggle="pill" href="#trabajadores">trabajadores</a></li>
    <li><a data-toggle="pill" href="#reserva">reservas</a></li>
    <li><a data-toggle="pill" href="#tramos">tramos</a></li>
    <li><a data-toggle="pill" href="#viajes">viajes</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Configuraciones</h3>
      <p>Configuraciones de la empresa</p>
    </div>
    <div id="ventas" class="tab-pane fade">
      <h3>ventas</h3>
      <p>lista de ventas realizadas </p>
      <div class="row">
      	<div class="col-md-8">
      		<table class="table table-hover">
		      <tr class="active">
		        <td>placa </td>
		        <td>ruta  </td>
		        <td>nombre Cliente</td>
		        <td>Precio bs. </td>
		        <td>fecha </td>
		        <td>accion </td>

		      </tr>
		      <?php
		      $result= mysql_query("select * from venta");
		      while($row=mysql_fetch_array($result)){ ?>
		        <tr>
		          <td><?php echo $row["CiTrab"]; ?></td>
		          <td><?php echo $row["IdRuta"]; ?></td>
		          <td><?php echo $row["NombreCli"]; ?></td>
		          
		          <td><?php echo $row["Precio"]; ?></td>
		          <td><?php echo $row["Fecha"]; ?></td>
		          <td>
		          	<a class="btn btn-info btn-sm"
		          	data-toggle="modal"
		          	data-target="#myModal<?php echo $id; ?>">
		          	<i class="glyphicon glyphicon-pencil"></i> Editar</a> | <a data-toggle="modal" data-target="#delModal<?php echo $id; ?>" class="btn btn-danger btn-sm">
		          	<i class="glyphicon glyphicon-trash"></i> eliminar</a>
					</td>
		        </tr>
		      <?php
		      }
		      ?>
		    </table>
      	</div>
      </div>
    </div>
    <div id="buses" class="tab-pane fade">
      <h3>Buses</h3>
      <p>administracion de buses</p>
      <div class="row">
      	<div class="col-md-8">
      		<table class="table table-hover">
		      <tr class="active">
		        <td>placa </td>
		        <td>tipo  </td>
		        <td>capacidad</td>
		        <td>fecha de Registro</td>
		        <td>Accion </td>

		      </tr>
		      <?php
		      $result= mysql_query("select * from bus");
		      while($row=mysql_fetch_array($result)){ ?>
		        <tr>
		          <td><?php echo $row["Placa"]; ?></td>
		          <td><?php echo $row["Tipo"]; ?></td>
		          <td><?php echo $row["Capacidad"]; ?></td>
		          <td><?php echo $row["fecha_registro"]; ?></td>
		          <td>
		          	<a class="btn btn-info btn-sm"
		          	data-toggle="modal"
		          	data-target="#myModal<?php echo $id; ?>">
		          	<i class="glyphicon glyphicon-pencil"></i> Editar</a> | <a data-toggle="modal" data-target="#delModal<?php echo $id; ?>" class="btn btn-danger btn-sm">
		          	<i class="glyphicon glyphicon-trash"></i> eliminar</a>
					</td>
		        </tr>
		      <?php
		      }
		      ?>
		    </table>
      	</div>
      </div>
    </div>
    <div id="trabajadores" class="tab-pane fade">
      <h3>trabajadores</h3>
      <p>Administracion de trabajadores</p>
      <div class="row">
      	<div class="col-md-8">
      		<table class="table table-hover">
		      <tr class="active">
		        <td>carnet </td>
		        <td>Apellidos  </td>
		        <td>Nombre Completo</td>
		        <td>cargo</td>
		        <td>celular</td>
		        <td>fecha de Registro</td>
		        <td>Accion </td>

		      </tr>
		      <?php
		      $result= mysql_query("select * from trabajador");
		      while($row=mysql_fetch_array($result)){ ?>
		        <tr>
		          <td><?php echo $row["CiTrab"]; ?></td>
		          <td><?php echo $row["Apellidos"]; ?></td>
		          <td><?php echo $row["Nombres"]; ?></td>
		          <td><?php echo $row["Cargo"]; ?></td>
		          <td><?php echo $row["Cel"]; ?></td>
		          <td><?php echo $row["fecha_registro_trab"]; ?></td>
		          <td>
		          	<a class="btn btn-info btn-sm"
		          	data-toggle="modal"
		          	data-target="#myModal<?php echo $id; ?>">
		          	<i class="glyphicon glyphicon-pencil"></i> Editar</a> | <a data-toggle="modal" data-target="#delModal<?php echo $id; ?>" class="btn btn-danger btn-sm">
		          	<i class="glyphicon glyphicon-trash"></i> eliminar</a>
					</td>
		        </tr>
		      <?php
		      }
		      ?>
		    </table>
      	</div>
      </div>
    </div>
    <div id="reserva" class="tab-pane fade">
      <h3>reserva</h3>
      <p>Administracion de Reservas</p>
      <div class="row">
      	<div class="col-md-8">
      		<table class="table table-hover">
		      <tr class="active">
		        <td>Tramo o Ruta </td>
		        <td>Carnet de Cliente</td>
		        <td>Nombre Completo</td>
		        <td>origen</td>
		        <td>destino</td>
		        <td>Celular</td>
		        <td>Nro de Asiento</td>
		        <td>fecha de Registro</td>
		        <td>Accion </td>

		      </tr>
		      <?php
		      $result= mysql_query("select * from reserva");
		      while($row=mysql_fetch_array($result)){ ?>
		        <tr>
		         <td><?php echo $row["IdTramo"]; ?></td>
		         <td><?php echo $row["CiUsuario"]; ?></td>
		         <td><?php echo $row["NombreUsu"]; ?></td>
		         <td><?php echo $row["Origen"]; ?></td>
		          <td><?php echo $row["Destino"]; ?></td>
		          <td><?php echo $row["Celular"]; ?></td>
		          <td><?php echo $row["NroAsiento"]; ?></td>
		          
		          <td><?php echo $row["Fecha"]; ?></td>
		          <td>
		          	<a class="btn btn-info btn-sm"
		          	data-toggle="modal"
		          	data-target="#myModal<?php echo $id; ?>">
		          	<i class="glyphicon glyphicon-pencil"></i> Editar</a> | <a data-toggle="modal" data-target="#delModal<?php echo $id; ?>" class="btn btn-danger btn-sm">
		          	<i class="glyphicon glyphicon-trash"></i> eliminar</a>
					</td>
		        </tr>
		      <?php
		      }
		      ?>
		    </table>
      	</div>
      </div>
    </div>
    <div id="tramos" class="tab-pane fade">
      <h3>tramos</h3>
      <p>EaquListado de Tramos.</p>
      <div class="row">
      	<div class="col-md-8">
      		<table class="table table-hover">
		      <tr class="active">
		       	<td>origen</td>
		        <td>destino</td>
		        <td>Precio</td>
		        <td>Nro de Viaje</td>
		        <td>fecha de Viaje</td>
		        <td>hora de salida</td>
		        <td>Accion </td>

		      </tr>
		      <?php
		      $result= mysql_query("select * from tramos");
		      while($row=mysql_fetch_array($result)){ ?>
		        <tr>
		         <td><?php echo $row["Origen"]; ?></td>
		          <td><?php echo $row["Destino"]; ?></td>
		          <td><?php echo $row["Precio"]; ?></td>
		          <td><?php echo $row["IdViaje"]; ?></td>
		          <td><?php echo $row["fecha"]; ?></td>
		          <td><?php echo $row["hora_salida"]; ?></td>
		          <td>
		          	<a class="btn btn-info btn-sm"
		          	data-toggle="modal"
		          	data-target="#myModal<?php echo $id; ?>">
		          	<i class="glyphicon glyphicon-pencil"></i> Editar</a> | <a data-toggle="modal" data-target="#delModal<?php echo $id; ?>" class="btn btn-danger btn-sm">
		          	<i class="glyphicon glyphicon-trash"></i> eliminar</a>
					</td>
		        </tr>
		      <?php
		      }
		      ?>
		    </table>
      	</div>
      </div>
    </div>
    <div id="viajes" class="tab-pane fade">
      <h3>viajes</h3>
      <p>Detalle de los viajes</p>
      <div class="row">
      	<div class="col-md-8">
      		<table class="table table-hover">
		      <tr class="active">
		        <td>Destino </td>
		        <td>precio  </td>
		        <td>fecha</td>
		        <td>hora</td>
		        <td>Placa bus</td>
		        <td>Nro de Tramos</td>
		        <td>Accion </td>

		      </tr>
		      <?php
		      $result= mysql_query("select * from viaje");
		      while($row=mysql_fetch_array($result)){ ?>
		        <tr>
		          <td><?php echo $row["Destino"]; ?></td>
		          <td><?php echo $row["Precio"]; ?></td>
		          <td><?php echo $row["Fecha"]; ?></td>
		          <td><?php echo $row["Hora"]; ?></td>
		          <td><?php echo $row["PlacaBus"]; ?></td>
		          <td><?php echo $row["Ntramos"]; ?></td>
		          <td>
		          	<a class="btn btn-info btn-sm"
		          	data-toggle="modal"
		          	data-target="#myModal<?php echo $id; ?>">
		          	<i class="glyphicon glyphicon-pencil"></i> Editar</a> | <a data-toggle="modal" data-target="#delModal<?php echo $id; ?>" class="btn btn-danger btn-sm">
		          	<i class="glyphicon glyphicon-trash"></i> eliminar</a>
					</td>
		        </tr>
		      <?php
		      }
		      ?>
		    </table>
      	</div>
      </div>
    </div>
  </div>
</div>

</body>
</html>