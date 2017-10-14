<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimun-scale=1.0"-->

      <!-- Bootstrap -->
    <!--link rel="stylesheet" href="{% static 'css/bootstrap.min.css' %}"-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <title>{% block title %} base {% endblock %}</title>

</head>
<body>
    {% block navbar %}
  <nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>f
      </button>
      <a class="navbar-brand" href="#">Compra y venta en Bolvia</a>
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
        {% csrf_token %}
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar">
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        {% if user.authenticated %}
            <li>{{ user.username|capfirst }}</li>
        {% else %}
            <li>
              <a class="dropdown-toggle" data-toggle="modal" data-target="#ModalRegistrarse">registrarse</a>
            </li>
        {% endif %}
        
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
            {% csrf_token %}
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

<!-- Modal Become a member -->
<form action="#" method="post" id="newmember" >
    <div class="modal fade" id="ModalRegistrarse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Registrarse</h4>
        </div>
        <div class="modal-body form-inline">
          <div class="form-group has-feedback">
              <label class="control-label" for="firstnamelabel">* nombre</label>
              <input type="text" class="form-control" placeholder="Nombre Completo" required="">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
          </div>
          
          <div class="form-group has-feedback">
              <label class="control-label" for="lastnamelabel">* apellidos</label>
              <input type="text" class="form-control" placeholder="apellidos" required="">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
          </div>
          
          <div class="form-group has-feedback">
              <label class="control-label" for="emaillabel">* Email </label>
              <input type="email" class="form-control"  placeholder="Correo electronico" required="">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
          </div>
          <div class="form-group has-feedback">
              <label class="control-label" for="firstnamelabel">* Nombre de usuario </label>
              <input type="text" class="form-control" placeholder="escojase un nombre de usuario " required="">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
          </div>
          
          <div class="form-group has-feedback">
              <label class="control-label" for="passwordlabel">* contraseña </label>
              <input type="password" class="form-control"  placeholder="Contraseña" required="">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
          </div>
          
          <div class="form-group has-feedback">
              <label class="control-label" for="re-enterpasswordlabel">* Repetir-contraseña</label>
              <input type="password" class="form-control"  aria-describedby="repetir contraseña " required="">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
          </div>
          
          <div class="form-group has-feedback">
              <label class="control-label" for="postcodelabel">Postcode</label>
              <input type="text" class="form-control" id="postcodeinput" aria-describedby="postcodeinput">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
          </div>
          
           <div class="form-group">
              <label class="control-label" for="postcodelabel">How did you hear about us?</label>
              <select class="form-control">
                  <option>- Please select -</option>
                  <option>Email newsletter</option>
                  <option>Fax</option>
                  <option>Conference/Tradeshow</option>
                  <option>Social Media</option>
                  <option>Other</option>
              </select>
          </div>
          <br/>
          
           <div class="form-group">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Sign up</button>
           </div>
          
        </div><!-- end modal-Body -->
        
      </div>
    </div>
    </div><!-- end become a member modal -->
  </form> <!-- end Form -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src=" {% static 'js/jquery-3.2.1.js' %}"  ></script-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--script src="{% static 'js/bootstrap.min.js' %}"></script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  {% endblock navbar %}
  
  {% block content %}
      <h1>contenido de la base html </h1>
  {% endblock %}
</body>
</html>