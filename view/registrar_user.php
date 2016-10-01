<?php 
require 'frontend/head.php';
require 'frontend/nav.php';
?>
<form action="../index.php?action=grabar" method="POST" class="fregistro" name="formregistrouser">
  <div class="form-group">
     <label>Nombres</label>
     <input  type="text" class="form-control" name="nom" >
  </div>
   <div class="form-group">
     <label>Usuario</label>
     <input  type="text" class="form-control" name="user">
  </div>
   <div class="form-group">
     <label>Contraseña</label>
     <input  type="password" class="form-control" name="pass">
  </div>
   <div class="form-group">
     <label>Mail</label>
     <input  type="text" class="form-control" name="mail">
  </div>
   <div class="form-group">
     <label>tipo</label>
     <input  type="text" class="form-control" name="tipo">
  </div>
  <div class="form-group">
     <input  type="submit" class="btn btn-primary" name="grabar" value="Registrarme">
  </div>
 
</form>

<?php 
require 'frontend/footer.php';

?>