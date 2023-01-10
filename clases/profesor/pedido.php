<?php
class Pedido extends clsProducto 
{
   private int $id_pedido;
   private $nombre_producto=array();
   private $precio = array();
   private $id_producto = array();
   private string $cantidad;
   
  

   //OBTENER LOS VALORES GET
   public function getIdPedido()
   {
      # code... 
      return $this->id_pedido;
   }
   public function getProducto(){

      return $this->nombre_producto;
   }
   public function getCantidad()
   {
      # code... 
      return $this->cantidad;
   }
  
   public function getIdProducto()
   {
      return $this->id_producto; 
   }
   public function getPrecio(){

   
         # code... 
         return $this->precio;
   } 

   //ESTABLECER LOS VALORE DE GET => SET
 
   public function setIdPedido(string $valor)
   {
      $this->id_pedido = $valor;
   }
   public function setCantidad(string $valor)
   {
      $this->cantidad = $valor;
   }
   public function Producto(string $valor){
      $this->nombre_producto=$valor;

   }
   public function setPrecio(string $valor)
   {
      $this->precio = $valor;
   }
   public function setIdProducto(string $valor){
      $this->id_producto=$valor;
   }

   

   //LECTURA CON UN CONSTRUCTOR ESTA PROPIEDAD VA A SER LLAMADO POR EL INDEX
   

   public function __construct(
      int $argIdPedido,
      string $argCantidad,
      string $argIdProducto,
      string $argPrecio,
      string $argNombreProducto
   ) {
      parent::__construct($argNombreProducto,$argPrecio,$argIdProducto);
      
      $this->setCantidad($argCantidad);
      $this->setPrecio($argPrecio);
      $this->setIdPedido($argIdPedido);

   }
   public function asignarProducto( Persona $argProducto)
   {
      if(count($this->id_producto)>=3)
      {
         throw new Exception("No se puede tener mas productos ");
      }
      else
      {
         $argProducto->setDireccion($this);
         array_push($this->nombre_producto, $argProducto);
      }
   }
}
