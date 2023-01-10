<?php
   class Usuario {
      private int $id_Usuario;
      private string $Nombre_Usuario;
      private string $Correo;
      private string $Password;

   //OBTENER LOS VALORES GET
      public function getIdUsuario()
      {
      # code... 
         return $this->id_Usuario;
      } 
      public function getNombre()
      {
         # code... 
         return $this->Nombre_Usuario;
      }
      public function getCorreo()
      {
      # code... 
         return $this->Correo;
      }
      public function getPassword()
      {      
      # code... 
         return $this->Password;
      } 

      //ESTABLECER LOS VALORE DE GET => SET

      public function setIdUsuario (string $valor)
      {
         $this->id_Usuario=$valor;
      }
      public function setNombre(string $valor)
      {
         $this->Nombre_Usuario = $valor;
      }
      public function setCorreo(string $valor)
      {
         $this->Correo = $valor;
      }
      public function setPassword(string $valor)
      {
         $this->Password = $valor;
      }

      //LECTURA CON UN CONSTRUCTOR ESTA PROPIEDAD VA A SER LLAMADO POR EL INDEX
     
      public function __construct(int $argIdUsuario, string $argNombre_Usuario, string $argCorreo, string $argPassword)
      {
         $this->setIdUsuario($argIdUsuario);
         $this->setNombre($argNombre_Usuario);
         $this->setCorreo($argCorreo);
         $this->setPassword($argPassword); 
      }

   }

?>