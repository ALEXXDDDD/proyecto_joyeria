<?php
class Persona2{
   public  $id_persona;
   public $nombres;
   public $apellidos;
   public $telefono;
   public $direccion;

   public function __construct(
      $id_persona,
      $nombres,
      $apellidos,
      $telefono,
      $direccion
   ) {
      $this->id_persona = $id_persona;
      $this->nombres = $nombres;
      $this->apellidos = $apellidos;
      $this->telefono = $telefono;
      $this->direccion = $direccion;
   }
   public function nombreCompleto(): string
   {
      return $this->nombres . ' ' . $this->apellidos;
   }
  
}
?>