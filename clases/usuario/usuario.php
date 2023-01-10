<?php
require_once __DIR__."./../../../proyecto_joyeria/clases/persona/persona2.php";
   class Usuario extends Persona2 {
      public $id;
      public $nombre_usuario;
      public $correo;
      function __construct($id,$nombre_usuario,$correo)
      {
         $this->id=$id;
         $this->nombre_usuario= $nombre_usuario;
         $this->correo=$correo;
      }
      static function filaUsuario ($fila)
      {
         $usuario= new Usuario(
            $fila['id'],
            $fila['nombre_usuario'],
            $fila['correo'],
         );
         return $usuario;
      }
      static function desdePersona($fila)
      {
         $usuario=Usuario::filaUsuario($fila);
         $usuario->nombres=$fila['nombres'];
         $usuario->apellidos = $fila['apellidos'];
         $usuario->telefono = $fila['telefono'];
        
         $usuario->correo = $fila['correo'];
         return $usuario;

      }
   }







?>