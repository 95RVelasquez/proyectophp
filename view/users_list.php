<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema Web</title>
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
	<link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Sistema Web</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Noticias</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Webs Programacion<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Iniciar Sesion</a></li>
        <li><a href="view/registrar_user.php">Registrarme</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="formlistausers">
  <form action="" class="formusers" method="get">
     <table  border="1" class="table" >
        <tr class="table_head">
            <th >Codigo</th>
            <th>Nombres</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Mail</th>
            <th>Tipo</th>
            <th>CRUD</th>
        </tr>
     <?php 
        foreach ($datos as $fila) {
     ?>
         <tr>
         
            <th class="btn btn-primary tr_codigo"><a class="tr_codigo" href="view/actualizar_user.php?xcod=<?php echo $fila['cod']?>&xnom=<?php echo $fila['nombres']?>&
            xuser=<?php echo $fila['usuario']?>&xpass=<?php echo $fila['pass']?>&xmail=<?php echo $fila['mail']?>&xtipo=<?php echo $fila['tipo']?>"><?php echo $fila['cod']?></a></th>
            <th><?php echo $fila['nombres']?></th>
            <th><?php echo $fila['usuario']?></th>
            <th><?php echo $fila['pass']?></th>
            <th><?php echo $fila['mail']?></th>
            <th><?php echo $fila['tipo']?></th>
            <th>
            <div class="accesos">
               
               <li><a href="view/actualizar_user.php?xcod=<?php echo $fila['cod']?>&xnom=<?php echo $fila['nombres']?>&
            xuser=<?php echo $fila['usuario']?>&xpass=<?php echo $fila['pass']?>&xmail=<?php echo $fila['mail']?>&xtipo=<?php echo $fila['tipo']?>"><img class="icon-delete" src="view/img/update.png"></a></li>
               <li><a href=""><img class="icon-delete" src="view/img/imprint.png"></a></li>
                <li><a href=""><img class="icon-delete" src="view/img/mas.png"></a></li>
                <li><a href="index.php?action=delete&xcod=<?php echo $fila['cod']?>"><img class="icon-delete" src="view/img/delete.png"></a></li>
            </div>
            
            </th>
        </tr>
     <?php 
        }
     ?>
     </table>
  
  </form>
</div>

<footer class="panel-footer">
  
  <h5>Copyright &copy; <?php echo date('Y',time()); ?> sistema web</h5>
  <script src="view/js/jquery-3.1.1.min.js"></script>
  <script src="view/bootstrap/js/bootstrap.min.js"></script>
</footer>
</body>
