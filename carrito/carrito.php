<?php
require_once __DIR__ . "./../../proyecto_joyeria/clases/usuario/usuario.php";
require_once __DIR__ . "./../../proyecto_joyeria/httpTools/httpTools.php";


httpTools::iniciarSesion();
$logeado = false;
$perfil;
if (isset($_SESSION["perfil"])) {
   $logeado = true;
   $perfil = $_SESSION["perfil"];
}
?>
<html>
<?php if ($logeado == false) :?>
<?php httpTools::redireccionar("./../errores/404 notFound.php")?>
<?php else:?>
<h2>Logeado Correcto</h2>
<body>
   <h1>MI CARRITO</h1>
   
</body>
<?php endif;?>


</html>