<?php
require_once __DIR__."./../../proyecto_joyeria/productos/producto.php";
require_once __DIR__ . "./../clases/coneccion.php";
   class productoAdapter{
      static public function eliminarProducto ($id)
      {
         $db= new Coneccion();
         $sql= "DELETE FROM `joyeria_matos`.`producto`
                  WHERE idproducto=$id;";
         $resp=$db->eliminar($sql);
         return $resp;

      }
   public  static function listarProducto()
   {
      $db = new Coneccion();                                  //=>abrimos la coneccion class coneccion
      $sql = "SELECT * FROM joyeria_matos.producto;";         //=>alacemamos la consulta en una variable sql
      $tabla = $db->consulta($sql);                           //=>llamamos a la funcion consulta de la class coneccion
      $db->close();                                         //=>cerramos la base
      $personas = productoAdapter::estructurarProduc($tabla);           //=>llamamos a la funcion estatica estructuras
      return $personas;                                     //=>returna el valor 

   }

   public static function estructurarProduc($tabla)
   {
      $productos = [];                                      //ESTA FUNCION ME ESTRUCTURA CON LA CLASS DE PERSONA     
      foreach ($tabla as $fila) {
         $p=new Producto($fila['idproducto'], 
                        $fila['nombre_producto'],
                        $fila['precio'],
                        $fila['logo']);
         $productos[] = $p;
      }
      return $productos;
   }
   static function crearProducto($producto)
   {
      $db = new Coneccion();
      $sql = "INSERT INTO `joyeria_matos`.`producto`
               (
               `nombre_producto`,
               `precio`,
               `logo`)
               VALUES
               ('$producto->nombre_producto',
               '$producto->precio',
               '$producto->logo');";
      $resp = $db->insertar($sql);
      $db->close();
      return $resp;
   }
   public static function estruturarProducto($id)
   {
      $db = new Coneccion();
      $sql = "SELECT *  FROM joyeria_matos.producto WHERE idproducto=$id;";
      $tabla = $db->consulta($sql);
      $db->close();
      $p = productoAdapter::estructurarProduc($tabla);
      if (count($p) > 0) {
         # code...
         return $p[0];
      } else {
         echo "NO EXISTE TAL producto";
      }
   }
   public static function actaulizarProducto ($productos)
   {
      $db= new Coneccion ();
      $sql = "UPDATE `joyeria_matos`.`producto` SET  `nombre_producto` = '$productos->nombre_producto',
      `precio` = '$productos->precio'
       WHERE (`idproducto` = '$productos->idproducto');
            ";
      $res=$db->actualizar($sql);
      $db->close();
      return $res;
   }
   }







?>