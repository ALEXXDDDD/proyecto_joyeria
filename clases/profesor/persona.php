<?php
   class Persona {
      private int $id_persona;
      private string $tipo_usuario;
      private string $nombre;
      private string $apellidos;
      private string $telefono;
      private string $direccion;

   //OBTENER LOS VALORES GET
      public function getIdPersona()
      {
      # code... 
         return $this->id_persona;
      } 
      public function getTipoUsuario()
      {
         # code... 
         return $this->tipo_usuario;
      }
      public function getNombre()
      {
      # code... 
         return $this->nombre;
      }
      public function getApellidos()
      {      
      # code... 
         return $this->apellidos;
      }
      public function getTelefono()
      {
         # code... 
         return $this->telefono;
      }
      public function getDireccion()
      {
         # code... 
         return $this->direccion;
      } 

      //ESTABLECER LOS VALORE DE GET => SET

      public function setIdPersona (string $valor)
      {
         $this->id_persona=$valor;
      }
      public function setTipoUsuario(string $valor)
      {
         $this->tipo_usuario= $valor;
      }
      public function setNombre(string $valor)
      {
         $this->nombre = $valor;
      }
      
      public function setApellidos(string $valor)
      {
         $this->apellidos = $valor;
      }
      public function setTelefono(string $valor)
      {
         $this->telefono = $valor;
      }
      public function setDireccion(Pedido $valor)
      {
         $this->direccion = $valor;
      }

      //LECTURA CON UN CONSTRUCTOR ESTA PROPIEDAD VA A SER LLAMADO POR EL INDEX
      public function nombreCompleto():string
      {
         return $this->nombre.' '. $this->apellidos;
      }
     
      public function __construct(int $argIdPersona,string $argTipoUsuario, string $argNombre, string $argApellidos, 
                                    string $argTelefono,
                                    string $argDireccion
                                 )
      {
         $this->setIdPersona($argIdPersona);
         $this->setTipoUsuario($argTipoUsuario);
         $this->setNombre($argNombre);
         $this->setApellidos($argApellidos);
         $this->setTelefono($argTelefono);
         
      }

   }
