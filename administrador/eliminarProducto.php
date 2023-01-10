<?php
require_once __DIR__."./../../proyecto_joyeria/productos/productoAdapter.php";
require_once __DIR__ . "./../../proyecto_joyeria/productos/detalleAdapter.php";

require_once __DIR__."./../httpTools/httpTools.php";
 echo "Eliminaremos "."el id";
 echo $_GET['idproducto'];
 if (isset($_GET['idproducto'])){
   $respDetalle= detalleAdapter::eliminarDetalleProducto($_GET['idproducto']);
   
   if($respDetalle==true){
      $respuesta = productoAdapter::eliminarProducto($_GET['idproducto']);
      if ($respuesta==true){
         httpTools::redireccionar("./listarProductos.php");
      }
      else{
         echo "No existe tal producto";
      }
      
   }
   else{
      echo "No existe tal producto";
   }
 }
 else{
   echo "No se elimino correctamente";
 }
?>