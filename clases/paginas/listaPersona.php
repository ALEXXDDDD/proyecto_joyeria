<?php
require_once __DIR__ . "./../proyecto_joyeria/clases/modelos/personaAdap.php";

echo "Lista de personas";
echo "<br>";
echo "<a href=\"./../proyecto_joyeria/form/formulario.php\"  >AÑADIR </a>";
echo "<br>";
$personas = personaAdap::listarPersona();
//foreach ($personas as $p) {
//echo "================================0";

//echo "<p>NOMBRE : $p->nombre </p>";
//echo "<p>APELLIDOS : $p->apellidos </p>";
//echo "<p>TIPO : $p->tipo_usuario </p>";
//}
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<tr>

</tr>

<table class="table table-striped">

   <?php foreach ($personas as $p) :    ?>
      <tr>
         <td>ID </td>

         <td> <?php echo " $p->id_persona "; ?> </td>

      </tr>
      <tr>
         <td>NOMBRES </td>
         <td>
            <?php echo " $p->nombres "; ?>
         </td>
      </tr>
      <tr>
         <td>APELLIDOS </td>
         <td>
            <?php echo " $p->apellidos "; ?>
         </td>
      </tr>
      <tr>
         <td>TIPO USUARIO </td>
         <td>
            <?php echo " $p->tipo_usuario "; ?>
         </td>
      </tr>
      <td>
         <button type="button" class="btn btn-light">
            <?php echo " <a href=\"./../proyecto_joyeria/clases/paginas/verSupervisor.php?id=$p->id_persona\"  >VER SUPERVISOR </a>" ?>
         </button> <!-- href=\"/BASE/p/detalleProducto.php?id=$p->id\"-->
      </td>
   <?php endforeach    ?>
   
</table>

</html>