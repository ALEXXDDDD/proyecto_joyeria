<?php
require_once __DIR__ . "./../../../proyecto_joyeria/httpTools/httpTools.php";
httpTools::cerrarSesion();
httpTools::redireccionar("./../../index.php");

?>