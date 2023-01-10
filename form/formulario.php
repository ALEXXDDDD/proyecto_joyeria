<?php
require_once __DIR__ . "./../../proyecto_joyeria/clases/modelos/personaAdap.php";
require_once __DIR__ . "./../../proyecto_joyeria/clases/modelos/usuarioAdap.php";

require_once __DIR__ . "./../../proyecto_joyeria/clases/persona/persona2.php";
require_once __DIR__ . "./../../proyecto_joyeria/clases/coneccion.php";
//CABECERA
require_once __DIR__ . "./../clases/paginas/cabecera.php";

if (
   isset($_POST['nombres'])
   && isset($_POST['apellidos'])
   && isset($_POST['telefono'])
   && isset($_POST['direccion'])
   && isset($_POST['correo'])
   && isset($_POST['clave'])
   && isset($_POST['repite_clave'])
) {
   $nombres = $_POST['nombres'];
   $apellidos = $_POST['apellidos'];
   $telefono = $_POST['telefono'];
   $direccion = $_POST['direccion'];
   $correo = $_POST['correo'];
   $clave = $_POST['clave'];
   $repite_clave = $_POST['repite_clave'];

   if ($clave == $repite_clave) {
      echo "claves correcta";
      $persona = new Persona2(
         0,
         $nombres,
         $apellidos,
         $telefono,
         $direccion,
      );
      $personaID = personaAdap::crearPersona($persona);
      if ($personaID != false) {
         echo "<h3>GRACIAS POR REGISTRATE SEÑOR $nombres";
         echo "<br>";
         $usuarioID = usuarioAdap::crearUsuario($personaID, $nombres, $correo, $clave);
         if ($usuarioID != false) {
            echo "SE CREO SU USUARIO $usuarioID";
            $id=usuarioAdap::validarCredenciales($correo,$clave);
            $perfil=usuarioAdap::perfil($id);
            httpTools::iniciarSesion();
            $_SESSION["perfil"]=$perfil;
            httpTools::redireccionar("./../clases/usuario/perfil.php");
         }
      }
   } else {
      echo "CLAVES INCORRECTAS";
   }
}

?>
<html>

<head>
   <link rel="stylesheet" href="./../css/styleFormulario.css">
</head>
<form action="" method="POST" class="FORMULARIO-REGISTRAR">
   <table>
      <p>
         <label for="nombres">NOMBRES</label>
         <input type="text" name="nombres" class="" required>
      </p>
      <p>
         <label for="apellidos">APELLIDOS</label>
         <input type="text" name="apellidos" placeholder="Ingrese sus apellidos" required>
      </p>
      <p>
         <label for="telefono">TELEFONO</label>
         <input type="text" name="telefono" placeholder="Telefono" min="2" max="9" maxlength="9" required>
      </p>
      <p>
         <label for="direccion">DIRECCION</label>
         <input type="text" name="direccion" required>
      </p>
      <p>
         <label for="correo">CORREO</label>
         <input type="email" name="correo" placeholder="example@adress.com" required>
      </p>
      <p>
         <label for="clave">CLAVE</label>
         <input type="password" name="clave" placeholder="Cree su clave " required>
      </p>
      <p>
         <label for="repite_clave">REPITA SU CLAVE</label>
         <input type="password" name="repite_clave" placeholder="Repita su clave  " required>
      </p>

   </table>
   <input type="submit" value="REGISTRARME" class="AÑADIR">
   <h5>Tienes una cuenta </h5>
   <a href="./../../proyecto_joyeria/form/inicioSesion.php">Ingrese Aqui</a>
</form>

</html>