<?php if(isset($_GET['mensaje']) == "noExiste") { ?>

    <?php if($_GET['mensaje'] == "noExiste") {  ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>Error no existe el archivo </strong> 
  </div>
  
  <?php } else if($_GET['mensaje'] == "tamanio") { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>Error el tamaño es demasiado grande </strong> 
  </div>
  <?php } else if($_GET['mensaje'] == "ok") { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>El documento fue guardado correctamente </strong> 
  </div>

  <?php }} ?>  

