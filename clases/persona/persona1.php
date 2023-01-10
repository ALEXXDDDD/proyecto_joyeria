<?php
class Persona1
{
   public  $id_persona;
   public  $tipo_usuario;
   public $nombres;
   public $apellidos;
   public $estado_contrato;
   public $experiencia;
   public $telefono;
   public $direccion;
   public $supervisor;
   

   
   //LECTURA CON UN CONSTRUCTOR ESTA PROPIEDAD VA A SER LLAMADO POR EL INDEX
   
   public function __construct(
       $id_persona,
       $tipo_usuario,
       $nombres,
      $apellidos,
       $estado_contrato,
       $experiencia,
       $telefono,
       $direccion,
       $supervisor
   ) {
            $this->id_persona=$id_persona;
            $this->tipo_usuario = $tipo_usuario;
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            $this->estado_contrato = $estado_contrato;
            $this->experiencia = $experiencia;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
            $this->supervisor = $supervisor;
     

   }
   public function nombreCompleto(): string
   {
      return $this->nombres . ' ' . $this->apellidos;
   }

}
