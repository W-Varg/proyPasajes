<?php
include 'conexion.php';
$conect = new Connection();
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = 'varg'; //mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = '123456';//mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM usuarios WHERE username = '$myusername' and password = '$mypassword'";
      echo $sql.'<br>';
      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
      $active = $row['id'];
      
      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: administracion.php");
      }else {
         $error = " Tus datos no son correctos";
      }
   }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!--link rel="stylesheet" href="Css/css.css">
  <link rel="stylesheet" href="Css/font-awesome.min.css">
  <link rel='stylesheet' href='Css/w3.css'>
  <link rel="stylesheet" href="Css/w3-theme-blue-grey.css">
  <link rel="stylesheet" href="Css/mystilo.css">
	<link href="Css/boostraps/bootstrap.min.css" rel="stylesheet">
	<link href="Css/boostraps/bootstrap-theme.min.css" rel="stylesheet">
	 <link href="Css/boostraps/http _getbootstrap.com_examples_signin_signin.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="csscod/menu.css"-->
</head>
<body>
  <nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>f
      </button>
      <a class="navbar-brand" href="#">Empresa De Viaje</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" ><a href="#">Home</a></li>
        <li><a href="#">Link</a></li>
        <!-- menu despegable con opciones-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">opciones <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="">Action</a></li>
                <li><a href="">accion 2</a></li>
                <li><a href="">accion 3</a></li>
                  <li class="divider"></li>
                <li><a href="">otro link aqui</a></li>
                <li class="divider"></li>
                <li><a href="">ayuda</a></li>
              </ul>
            </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
      
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar">
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
            <li>
              <!--a class="dropdown-toggle" data-toggle="modal" data-target="#ModalRegistrarse">registrarse</a-->
            </li>
   
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="modal" data-target="#ModalIngresar">Login</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 <!--este es el modal de ingresar-->
<div class="modal fade" id="ModalIngresar" >
<div class="modal-dialog">
<div class="modal-content">
      <!---emcabezado de modal-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">cerrar</span>
          </button>
          <h2 class="modal-title">Cuenta Personal</h2> 
        </div>
        <!--contenido de la ventana-->
        <div class="modal-body">
         <form class="form" method="Post">
            <div class="form-group"><input type="text" name="username" class="form-control" placeholder="Nombre de Usuario"></div><br>
            <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Contraseña"></div>
            <div class="form-group"> <button type="submit" class="btn btn-primary btn-block">Ingresar</button></div>
          </form>
        </div>
        <!--footer del modal-->
         <div class="modal-footer"><h4>olvidaste tu Contraseña??</h4>
            <button type="button" class="btn btn-default btn-block">Recuperar</button>
         </div>
</div>
</div>
</div><!--final modal login -->


	<div class="col-sm-9 col-md-10 affix-content">
	<div class="table-responsive col-md-6">
     <h4>Lisra de Tramos</h4>
    <table class="table table-hover">
      <tr class="active">
        <td>Origen </td>
        <td>Destino  </td>
        <td>Precio Bs.</td>
        <td>Hora </td>
        <td>fecha </td>
        <td>accion </td>

      </tr>
      <?php
      $result= mysql_query("select * from tramos");
      while($row=mysql_fetch_array($result)){ ?>
        <tr>
          <td><?php echo $row["Origen"]; ?></td>
          <td><?php echo $row["Destino"]; ?></td>
          <td><?php echo $row["Precio"]; ?></td>
          
          <td><?php echo $row["hora_salida"]; ?></td>
          <td><?php echo $row["fecha"]; ?></td>
          <td><a href="vistaPasajes.php?var=<?php echo $row['IdTramos']?>" >reservar</a></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
  </div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>