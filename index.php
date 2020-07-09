<?php 

require 'admin/config.php';
requiere 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion){
  header('Location:error.php');
}

obtener_post();


require 'views/index.view.php';

?>
