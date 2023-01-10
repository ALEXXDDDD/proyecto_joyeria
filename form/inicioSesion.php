<?php
require_once __DIR__ . "./../clases/paginas/cabecera.php";
require_once __DIR__ . "./../clases/modelos/usuarioAdap.php";
require_once __DIR__ . "./../clases/usuario/usuario.php";
require_once __DIR__ . "./../httpTools/httpTools.php";
httpTools::iniciarSesion();
$falloLogueo = false;

if (isset($_POST['correo']) && isset($_POST['Password'])) {
   $correo = $_POST['correo'];
   $Password = $_POST['Password'];
   $id = usuarioAdap::validarCredenciales($correo, $Password);

   if ($id != 0) {
      $perfil = usuarioAdap::perfil($id);
      $_SESSION["perfil"] = $perfil;
       httpTools::redireccionar("./../../proyecto_joyeria/index.php");
   } else {
      httpTools::cerrarSesion();
      $falloLogueo = true;
   }
}
?>

<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="./../css/style.css">
</head>

<head>
   <title>INICIO SESION </title>
</head>


<form action="" class="INICIO-SESION" method="POST">
   <h1>Mi cuenta</h1>
   <div class="CAJA-CORREO">
      <label for="correo" class="CORREO">Correo</label>
      <input type="text" class="INPUT-CORREO" name="correo" placeholder="Correo" required>
   </div>
   <div class="CAJA-PASSWORD">
      <label for="Password" class="PASSWORD">Contraseña</label>
      <input type="password" class="INPUT-PASSWORD" name="Password" placeholder="Contraseña" required>
   </div>
   <input type="submit" value="INGRESAR" class="BUTTON-INGRESAR">
</form>
<h2><?php if ($falloLogueo == true) : ?></h2>
<h2>Correo o Contraseña INCORRECTAS</h2>
<h2><?php endif; ?></h2>


<h5>¿No tienes cuenta ? </h5>
<a href="./../../proyecto_joyeria/form/formulario.php">Registrate Aqui</a>


</html>