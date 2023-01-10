<?php
class clsProducto
{
   private int $id_producto;
   private string $nombre_producto;
   private string $precio;
   
   //OBTENER LOS VALORES GET
   public function getIdProducto()
   {
      # code... 
      return $this->id_producto;
   }
   public function getNombreProducto()
   {
      # code... 
      return $this->nombre_producto;
   }
   public function getPrecio()
   {
      # code... 
      return $this->precio;
   }
   
   //ESTABLECER LOS VALORE DE GET => SET

   public function setIdProducto(string $valor)
   {
      $this->id_producto = $valor;
   }
   public function setNombreProducto(string $valor)
   {
      $this->nombre_producto = $valor;
   }
   public function setPrecio(string $valor)
   {
      $this->precio = $valor;
   }

   

   //LECTURA CON UN CONSTRUCTOR ESTA PROPIEDAD VA A SER LLAMADO POR EL INDEX
  

   public function __construct(
      int $argIdProducto,
      string $argNombreProducto,
      string $argPrecio
   ) {
      $this->setIdProducto($argIdProducto);
      $this->setNombreProducto($argNombreProducto);
      $this->setPrecio($argPrecio);
      
   }
}
