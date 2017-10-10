<?php include('conexion.php');
 $idTramo=$_GET['var'];
echo $idTramo;
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="creandoajax.js"></script>
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
<style>
  .as{
    color: #FF5118;
    size: "5";
  }
  .por{
    color: red;
  }
  .asie{
    width: 140px;
  }
</style>
<body">
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
        <li><a href="Index.php"><span class="glyphicon glyphicon-lock"></span> INICIO</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> PROGRAMAR <span class="badge pull-right">42</span></a></li>
        <li><a href=""><span class="glyphicon glyphicon-cog"></span> COMPRAR</a></li>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
	</div>
        <?php
        include('conexion.php');
        $rec=mysql_query("SELECT * FROM tramos WHERE IdViaje = $idTramo");
        $mos=mysql_fetch_array($rec);
        $fecha = $mos['Fecha'];
        $Hora = $mos['Hora'];
        $Precio = $mos['Precio'];
        ?>
	<div class="col-sm-9 col-md-10 affix-content">
		  <div class="">
			
				<div class="page-header">
     <h3><span class="glyphicon glyphicon-th-list"></span> TRANS COPACABANA <lu class="as col-md-offset-1"> SUCRE - LA PAZ </lu> 
      <lu class="as col-md-offset-1"> <?php echo $fecha.'  -  '.$Hora; ?></lu><lu class="as col-md-offset-1"> <?php echo $Precio.' Bs.';?></lu> </h3>
      </div>
      <!--?php  $con = mysql_connect('localhost','root','');
    mysql_select_db("venta_pasajes", $con) or die ("No se pudo conectar a la base de datos"); ?-->
     <div class="table-responsive col-md-6">
     <h4>Lisra de Tramos</h4>
    <table class="table table-hover table-bordered">
      <tr class="active">
        <td>Origen </td>
        <td>Destino  </td>
        <td>Precio Bs.</td>
        <td>Hora </td>
      </tr>
      <?php
      $result= mysql_query("select * from tramos where IdViaje=5");
      while($row=mysql_fetch_array($result)){ ?>
        <tr>
          <td><?php echo $row["Origen"]; ?></td>
          <td><?php echo $row["Destino"]; ?></td>
          <td><?php echo $row["Precio"]; ?></td>
          <td><?php echo "00:00"; ?></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
      </div>
  <br>

    <div class="col-md-8 row">
       <div class="w3-col m11">
          <div class="w3-container w3-card-4 w3-white w3-round "><br>
            <h4>ELIGE UN ASIENTO</h4>
            <hr class="w3-clear">
              <div id="listaAsientos" >
              <?php
                
                  $asientos = 44;
                  $columna=4;
            ?>
          <center>
            <table class="table table-bordered table-condensed">
              
      <?php 
      if ($columna>0 && $asientos>0)
            {
                $num = 1;
                $query="SELECT NroAsiento FROM `reserva` where IdTramo=$idTramo ORDER BY `reserva`.`NroAsiento` ASC";
                $resultado= mysql_query($query, $conect);
                $fila = mysql_fetch_assoc($resultado);
                while($num <= $asientos) {
                  echo "<tr class='tab'>";
                  for ($columna=1; $columna <=4 ; $columna++) { 
                    # code...
                    
                            
                      if($fila['NroAsiento']==$num){
                          echo "<td class='asie'><input class='btn btn-danger'  type='button' value='ocupado' ></td>";
                           $fila = mysql_fetch_assoc($resultado);
                      }
                      else
                          echo "<td class='asie'><input class='btn btn-default' type='button' value='N°".$num."' ></td>";
                      $num++;
                      }
                  echo "</tr>";
        
                }mysql_free_result($resultado);
            }
                  else echo 'introdusca valores positivos mayores a 0';
         ?>
                  </table>
                </center>
              </div>
          </div>
        </div>
    </div>

    <div class="col-md-4 row">
       <div class="w3-col m11">
          <div class="w3-container w3-card-4 w3-white w3-round "><br>
            <h4>COMPRA TU PASAJE</h4>
            <hr class="w3-clear">
            <form method="" action="" class="centerr">
              <table border="0" id="tor">
                <tr>
                  <td> C. I.<lu class="por">*</lu>:</td>
                  <td><input name="" class="form-control" type="text" required="">
                  </td>
                </tr>
                 <tr>
                  <td>
                    Nomrbes/Ap <lu class="por">*</lu>:
                  </td>
                  <td>
                      <input type="text" class="form-control" name="" required="">
                  </td>
                </tr>
                <tr>
                  <td>
                    Origen : 
                  </td>
                  <td>
                       <select class="form-control" name="origen">
                        <?php $d=mysql_query("SELECT Origen FROM tramos WHERE IdTramos=$idTramo");
                        while ($row = mysql_fetch_array($d)) { ?>
                           <option value="Oruro"><?php echo $row['Origen']; ?></option>
                        <?php } ?>
                    </select> 
                  </td>
                </tr>
                <tr>
                  <td>
                    Destino : 
                  </td>
                  <td>
                       <select class="form-control" name="destino">
                        <?php $d=mysql_query("SELECT Destino FROM tramos WHERE IdTramos=$idTramo");
                        while ($row = mysql_fetch_array($d)) { ?>
                           <option value="Oruro"><?php echo $row['Destino']; ?></option>
                        <?php } ?>
                    </select> 
                  </td>
                </tr>
                <tr>
                  <td>
                    Nro. Asiento <lu class="por">*</lu>:
                  </td>
                  <td>
                      <input type="text" class="form-control" name="" required="">
                  </td>
                </tr>
                <tr>
                  <td>
                    Celular:
                  </td>
                  <td>
                      <input type="text" class="form-control" name="" required="">
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

</div>

</body>
</html>