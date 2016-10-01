<?php 
require 'frontend/head.php';
require 'frontend/nav.php';
  $cod=$_GET['xcod'];
  $nom=$_GET['xnom'];
  $user=$_GET['xuser'];
  $pass=$_GET['xpass'];
  $mail=$_GET['xmail'];
  $tipo=$_GET['xtipo'];
?>
<form action="../index.php?action=update" method="POST" class="fregistro" name="formregistrouser">
   <div class="form-group">
     <label>Codigo</label>
     <input  type="text" class="form-control" name="cod" value="<?php echo $cod; ?>" >
  </div>
  <div class="form-group">
     <label>Nombres</label>
     <input  type="text" class="form-control" name="nom" value="<?php echo $nom; ?>">
  </div>
   <div class="form-group">
     <label>Usuario</label>
     <input  type="text" class="form-control" name="user" value="<?php echo $user; ?>">
  </div>
   <div class="form-group">
     <label>Contraseña</label>
     <input  type="text" class="form-control" name="pass" value="<?php echo $pass; ?>">
  </div>
   <div class="form-group">
     <label>Mail</label>
     <input  type="text" class="form-control" name="mail" value="<?php echo $mail; ?>">
  </div>
   <div class="form-group">
     <label>tipo</label>
     <input  type="text" class="form-control" name="tipo" value="<?php echo $tipo; ?>">
  </div>
  <div class="form-group">
     <input  type="submit" class="btn btn-primary" name="update" value="Actualizar Datos">
  </div>
 
</form>

<?php 
require 'frontend/footer.php';

?>