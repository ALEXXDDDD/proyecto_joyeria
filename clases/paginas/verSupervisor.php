<?php
require_once __DIR__ . "./../../../proyecto_joyeria/clases/modelos/personaAdap.php";
$id = $_GET['id'];

$p = personaAdap::estruturarTecnico($id);
?>
<html>
      <h2>
         Su supervisor
      </h2>
      <h2><?php echo "Señor $p->nombres $p->apellidos"; ?></h2>
      <h3>ES EL SUPERVISOR </h3>
      <h3><?php echo" $p->supervisor";?></h3>

      <a href="./../../../proyecto_joyeria/index.php">VOLVER</a>
</html>