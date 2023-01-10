<?php
   class Producto{
      public $idproducto;
      public $nombre_producto;
      public $precio;
   public $logo;

   function __construct($idproducto, $nombre_producto, $precio,$logo)
   {
      $this->idproducto=$idproducto;
      $this->nombre_producto=$nombre_producto;
      $this->precio=$precio;
      $this->logo = $logo;

   }
   }

?>