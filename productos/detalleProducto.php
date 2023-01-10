<?php
require_once __DIR__."./producto.php";
   class detalleProducto  extends Producto
   {
      public $id_detalle_producto;
   public $categoria;
   public $material;
   public $precio;
   public $cantidad_stock;
   public $descripcion;

   function __construct($id_detalle_producto,$categoria,$material,$precio,$cantidad_stock,$descripcion)
   {
      $this->id_detalle_producto=$id_detalle_producto;
      $this->categoria=$categoria;
      $this->material=$material;
      $this->precio=$precio;
      $this->cantidad_stock=$cantidad_stock;
      $this->descripcion=$descripcion;
   }

   }

?>