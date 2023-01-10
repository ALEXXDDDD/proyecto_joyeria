<?php
require_once __DIR__ . "./../../proyecto_joyeria/productos/productoAdapter.php";

require_once __DIR__ . "./../httpTools/httpTools.php";
$producto;
$guardado = false;
echo $_GET['idproducto'];
if (isset($_GET['idproducto'])) {
   $producto = productoAdapter::estruturarProducto($_GET['idproducto']);

   if ($producto == null) {
      echo "No se encontro el id del producto a actualizar ";
   } else {
      if (isset($_POST['nombre_producto'])&& isset($_POST['precio'])) {
         $producto->nombre_producto = $_POST['nombre_producto'];
         $producto->precio = $_POST['precio'];
         $res = productoAdapter::actaulizarProducto($producto);
         if ($res = true) {
            $guardado = true;
            httpTools::redireccionar("./listarProductos.php");
         } else {
            echo "Nose pudo guraddar el producto";
         }
      }
   }
}





?>


<head>
   <link rel="stylesheet" href="./../css/styleFormulario.css">
</head>
<form action="" method="POST" class="FORMULARIO-REGISTRAR">
   editar <?php echo $producto->nombre_producto; ?>
   <table>
      <p>
         <label for="nombre_producto">NOMBRES DE PRODUCTO</label>
         <input type="text" name="nombre_producto" class="" value="<?php echo "$producto->nombre_producto" ?>">
      </p>
      <p>
         <label for="precio">PRECIO</label>
         <input type="number" name="precio" class="" value="<?php echo "$producto->precio" ?>">
      </p>
      <p>
         <label for="logo">NOMBRES DE PRODUCTO</label>
         <input type="file" name="logo" class="" value="<?php echo "$producto->logo" ?>">
      </p>

   </table>
   <input type="submit" value="ACTAULIZAR" class="AÑADIR">
</form>

</html>