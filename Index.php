<!DOCTYPE html>
<html>
<head>
	<title>Reg_Bus</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Css/css.css">
  <link rel="stylesheet" href="Css/font-awesome.min.css">
  <link rel='stylesheet' href='Css/w3.css'>
  <link rel="stylesheet" href="Css/w3-theme-blue-grey.css">
  <link rel="stylesheet" href="Css/mystilo.css">
	<link href="Css/boostraps/bootstrap.min.css" rel="stylesheet">
	<link href="Css/boostraps/bootstrap-theme.min.css" rel="stylesheet">
	 <link href="Css/boostraps/http _getbootstrap.com_examples_signin_signin.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="csscod/menu.css">
</head>
<body>
	<div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
		<div class="sidebar-nav">
  <div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Sidebar menu</span>
    </div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
      <ul class="nav navbar-nav" id="sidenav01">
        <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
          <h4>
          Control Panel
          <br>
          <small>IOSDSV <span class="caret"></span></small>
          </h4>
          </a>
          <div class="collapse" id="toggleDemo0" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">ProfileSubMenu1</a></li>
              <li><a href="#">ProfileSubMenu2</a></li>
              <li><a href="#">ProfileSubMenu3</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-cloud"></span> Submenu 1 <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">Submenu1.1</a></li>
              <li><a href="#">Submenu1.2</a></li>
              <li><a href="#">Submenu1.3</a></li>
            </ul>
          </div>
        </li>
        <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-inbox"></span> Submenu 2 <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo2" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">Submenu2.1</a></li>
              <li><a href="#">Submenu2.2</a></li>
              <li><a href="#">Submenu2.3</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-lock"></span> INICIO</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> PROGRAMAR <span class="badge pull-right">42</span></a></li>
        <li><a href="VistaPasajes.php"><span class="glyphicon glyphicon-cog"></span> COMPRAR</a></li>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
	</div>
	<div class="col-sm-9 col-md-10 affix-content">
		<div class="container">
			
				<div class="page-header">
	<h3><span class="glyphicon glyphicon-th-list"></span> Programar Viajes</h3>
  </div>
  <br>
    <div class="col-md-6 row">
    <div class="w3-col m11">
          <div class="w3-container w3-card-4 w3-white w3-round "><br>
            <h4>REGISTRO DE VIAJE</h4>
            <hr class="w3-clear">
        <form method="POST" action="Index.php">
        <table border="0" id="tor">
          <tr>
            <td> Destino <lu class="por">*</lu>:</td>
            <td><input name="Destino" class="form-control" type="text" required="">
            </td>
          </tr>
          <tr>
            <td> Fecha <lu class="por">*</lu>:</td>
            <td><input name="Fecha" class="form-control" type="date" required="">
            </td>
          </tr>
          <tr>
            <td> Hora <lu class="por">*</lu>:</td>
            <td><input name="Hora" class="form-control" type="time" required="">
            </td>
          </tr>
          <tr>
            <td>
              Placa Bus <lu class="por">*</lu>:
            </td>
            <td>
                <input type="text" class="form-control" name="Placa" required="">
            </td>
          </tr>
          <tr>
            <td> Nro. Tramos <lu class="por">*</lu>:</td>
            <td><input name="Tramos" class="form-control" type="text" required="">
            </td>
          </tr>
          <tr>
          
            <td><center><input type="submit" class="w3-btn w3-theme-d1 w3-margin-bottom" value="registrar"> </center></td>
            <td><center><input type="submit" class="w3-btn w3-theme-d1 w3-margin-bottom" value="borrar"> </center></td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </div>

<?php 
if (empty($_POST['Tramos'])) {exit;}
else{ $n=$_POST['Tramos'];
    $Destino=$_POST['Destino'];
    $Fecha=$_POST['Fecha'];
    $Hora=$_POST['Hora'];
    $Placa=$_POST['Placa'];
    $con = mysql_connect('localhost','root','');
    mysql_select_db("venta_pasajes", $con) or die ("No se pudo conectar a la base de datos");
    $insertar=("INSERT INTO viaje VALUES ('','$Destino', '$Fecha', '$Hora', '$Placa', $n)");
    $resultado= mysql_query($insertar);
      if (!$resultado) {
        echo '<script>alert("ERROR: VUELVA A INSERTAR LOS DATOS");
            window.history.go(-1);</script>';
      }else{
      echo "<script>alert('REGISTRADO EXITOSAMENTE');
          location.href='regTramos.php'</script>";
      }
    }
?>
  

</body>
</html>