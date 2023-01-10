<?php
require_once __DIR__ . "./../../httpTools/httpTools.php";
httpTools::validarUsuario();
require_once __DIR__ . "./../paginas/cabecera.php";
$usuario = $_SESSION["perfil"];
require_once __DIR__."./../persona/persona2.php";
require_once __DIR__ . "./../modelos/personaAdap.php";



?>
<html>

<body>
   <?php ?>
   <p>
      <h2><strong>PERFIL PERSONAL</strong></h2>
   </p>
   <p>
      <strong> Su Nombres </strong>
      <small><?php echo $perfil->nombreCompleto(); ?></small>
   </p>
   <p>
      <strong>Apellidos</strong>
      <small><?php echo $perfil->apellidos; ?></small>
   </p>
   <p>
      <strong>CORREO</strong>
      <small><?php echo $perfil->correo; ?></small>
   </p>

</body>

</html>