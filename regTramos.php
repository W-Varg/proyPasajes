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
        <li><a href="index.php"><span class="glyphicon glyphicon-lock"></span> INICIO</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> WithBadges <span class="badge pull-right">42</span></a></li>
        <li><a href=""><span class="glyphicon glyphicon-cog"></span> PreferencesMenu</a></li>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
	</div>
	<div class="col-sm-9 col-md-10 affix-content">
		<div class="container">
			
				<div class="page-header">
	<h3><span class="glyphicon glyphicon-th-list"></span> Programar Viawtrgjes</h3>
  </div>

<?php
    $con = mysql_connect('localhost','root','');
    mysql_select_db("venta_pasajes", $con) or die ("No se pudo conectar a la base de datos");

    $id = mysql_query("SELECT Ntramos from viaje where IdViaje=8");
    $id1 = mysql_fetch_array($id);
    $Ntramos =$id1['Ntramos'];
 ?>

  <div class="col-md-12">
    <div class="w3-col m11">
          <div class="w3-container w3-card-4 w3-white w3-round w4-margin"><br>
            <h4>REGISTRO DE TRAMOS</h4>
            <hr class="w3-clear">
            <?php
              for ($i=0; $i <$Ntramos ; $i++) { 
             ?>
              <form class="form-inline" role="form" method="post" action="inserTramos.php">
              <div class="form-group">
                <label class="sr-only">Origen</label>
                <input type="text" class="form-control"  name="Origen" 
                       placeholder="Introduce Origen">
              </div>
              <div class="form-group">
                <label class="sr-only">Destino</label>
                <input type="text" class="form-control"  name="Destino" 
                       placeholder="Introduce Destino">
              </div>
              <div class="form-group">
                <label class="sr-only">Precio</label>
                <input type="text" class="form-control" name="Precio" 
                       placeholder="Precio">
              </div>
              <button type="submit" class="btn btn-default">Entrar</button>
            </form>
          <?php } ?>
            <br><br>
        </div>
      </div>
  </div>

  </div>
  </div>

  </div>



  </body>
  </html>