<?php include('conexion.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index</title>
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
	<div class="col-sm-9 col-md-10 affix-content">
	<div class="table-responsive col-md-6">
     <h4>Lisra de Tramos</h4>
    <table class="table table-hover table-bordered">
      <tr class="active">
        <td>Origen </td>
        <td>Destino  </td>
        <td>Precio Bs.</td>
        <td>Hora </td>
        <td>accion </td>

      </tr>
      <?php
      $result= mysql_query("select * from tramos");
      while($row=mysql_fetch_array($result)){ ?>
        <tr>
          <td><?php echo $row["Origen"]; ?></td>
          <td><?php echo $row["Destino"]; ?></td>
          <td><?php echo $row["Precio"]; ?></td>
          <td><?php echo "00:00"; ?></td>
          <td><a href="vistaPasajes.php?var=<?php echo $row['IdTramos']?>" >reservar</a></td>
          
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
  </div>
	
</body>
</html>