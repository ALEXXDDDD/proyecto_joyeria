<?php
require_once __DIR__ . "./../../../proyecto_joyeria/clases/usuario/usuario.php";
require_once __DIR__ . "./../../../proyecto_joyeria/clases/coneccion.php";   
class usuarioAdap {
      static function crearUsuario ($id_usuario,$nombre_usuario, $correo ,$password,)
      {
            /**
             * PRIMERO SE EJECUTA LA CONECCION A LA BASE DE DATOS LLAMANDO A SU CLASE
             * DESPUES SE GUARDA LA CONSULTA EN UNA VARIABLE
             * DESPUES SE EJECUTA LA SEGUNDA CLASE LLAMADO insertar 
             * Tercero se cierra la base de datos
             * Finalmente se concluye devolviendome la variable con la clase insertar 
             */
            $db =new Coneccion();
            $hash = hash("sha512", $password);
            $sql= "INSERT INTO `joyeria_matos`.`usuario`
                  (
                  `persona_id_persona`,
                  `nombre_usuario`,
                  `correo`,
                  `password`
                  )
                  VALUES
                  (
                  '$id_usuario',
                  '$nombre_usuario',
                  '$correo',
                  '$hash');";
            $res=$db->insertar($sql);
            $db->close();
            return $res;
      }
      static function validarCredenciales ($correo, $Password)
      {
            $hash= hash("sha512",$Password);
            $sql= "SELECT id FROM joyeria_matos.usuario where correo='$correo' and 
                  Password='$hash' limit 1 ;";
            
            $db=new Coneccion();
            
            $tabla=$db->consulta($sql);
            $db->close();
            if(count($tabla)>0){
                  return $tabla[0]["id"];
            }
            return 0;

      }
      static function perfil($id)
      {
            $db = new Coneccion();
            $sql= "SELECT usu.id,
                  usu.correo,
                  usu.nombre_usuario,
                  pers.nombres,
                  pers.apellidos,
                  pers.telefono                 
                  FROM joyeria_matos.usuario
                  as usu
                  inner join joyeria_matos.persona
                  as pers
                  on usu.persona_id_persona=pers.id_persona
                  where usu.id=$id 
                  ;";
            $tabla=$db->consulta($sql);
            $db->close();
            if(count($tabla)>0)
            {
                  return Usuario::desdePersona($tabla[0]);
            }
            return null;
      }
         


   }  



?>