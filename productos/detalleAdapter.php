<?php
require_once __DIR__ . "./../productos/detalleProducto.php";
require_once __DIR__ . "./../clases/coneccion.php";
class detalleAdapter {
      static function crearDetalleP($categoria, $material, $precio, $cantidad_stock, $descripcion, $id_detalle_producto)
      {
         $db=new Coneccion();
         $sql= "INSERT INTO `joyeria_matos`.`detalle_producto`
                  (
                  `categoria`,
                  `material`,
                  `precio`,
                  `cantidad_stock`,
                  `descripcion`,
                  `producto_idproducto`)
                  VALUES
                  (
                  '$categoria',
                  '$material',
                  '$precio',
                  '$cantidad_stock',
                  '$descripcion',
                  '$id_detalle_producto');";
         $res=$db->insertar($sql);
         $db->close();
         return $res;
      }
      static public function eliminarDetalleProducto($id)
      {
            $db = new Coneccion();
            $sql = "DELETE FROM `joyeria_matos`.`detalle_producto`
                  WHERE producto_idproducto=$id;";
            $resp = $db->eliminar($sql);
            return $resp;
      }
      static function estructurar ($tabla)
      {
            $detalleProducto=[];
            foreach ($tabla as $Fila)
            {
                  $p= new detalleProducto(
                        $Fila['id_detalle_producto'],
                        $Fila['categoria'],
                        $Fila['material'],
                        $Fila['precio'],                        
                        $Fila['cantidad_stock'],
                        $Fila['descripcion']

                  );
                  $detalleProducto[]=$p;
            }
            return $detalleProducto;
      }
      static function obtenerDetalle($id)
      {
            $db = new Coneccion();
            $sql= "SELECT * FROM joyeria_matos.detalle_producto where producto_idproducto='$id';";
            $tabla=$db->consulta($sql);
            $db->close();
            $detalleProducto=detalleAdapter::estructurar($tabla);
            if(count($detalleProducto)>0)
            {
                  return $detalleProducto[0];
            }
            else{
                  return null;
            }
      }
}






?>