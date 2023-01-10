<?php
require_once __DIR__ . "./../administrador/cabbeceraVendedor.php";
require_once __DIR__ . "./../productos/productoAdapter.php";
require_once __DIR__ . "./../productos/detalleAdapter.php";

if (
   isset($_POST['nombre_producto'])
   && isset($_POST['precio'])
   && isset($_POST['logo'])
   && isset($_POST['categoria'])
   && isset($_POST['material'])
   && isset($_POST['cantidad'])
   && isset($_POST['descripcion'])
) {
   $nombre_producto = $_POST['nombre_producto'];
   $precio = $_POST['precio'];
   $logo = $_POST['logo'];
   $categoria = $_POST['categoria'];
   $material = $_POST['material'];
   $cantidad = $_POST['cantidad'];
   $descripcion = $_POST['descripcion'];
   $producto = new Producto(
      0,
      $nombre_producto,
      $precio,
      $logo,

   );
   $productoID = productoAdapter::crearProducto($producto);
   if ($productoID != 0) {
      echo "SE CREO EL PRODUCTO CON EL ID $productoID";
      echo "<br>";
      $destalleID = detalleAdapter::crearDetalleP($categoria, $material, $precio, $cantidad, $descripcion, $productoID);
      if ($destalleID != 0) {
         echo "SE CREO TAMBIEN SU DETALLE CON SU ID $destalleID";
         echo "<br>";
      }
   }
}

?>

<html>

<head>
   <link rel="stylesheet" href="./../css/styleFormulario.css">
</head>
<form action="" method="POST" class="FORMULARIO-REGISTRAR">
   <table>
      <p>
         <label for="nombre_producto">NOMBRES DE PRODUCTO</label>
         <input type="text" name="nombre_producto" class="">
      </p>
      <p>
         <label for="precio">PRECIO</label>
         <input type="number" name="precio" placeholder="">
      </p>
      <p>
         <label for="logo">LOGO</label>
         <input type="file" name="logo" placeholder="">
      </p>
      <p>
         <label for="categoria">CATEGORIA</label>
         <select name="categoria" id="">
            <option value="collar" name="collar">COLLAR</option>
            <option value="arete" name="arete">ARETE</option>
            <option value="anillo" name="anillo">ANILLO</option>
            <option value="pendiente" name="pendiente">PENDIENTE</option>
         </select>
      </p>
      <p>
         <label for="material">MATERIAL</label>
         <select name="material" id="">
            <option value="oro">ORO</option>
            <option value="plata">PLATA</option>
            <option value="bronce">BRONCE</option>
         </select>
      </p>
      <p>
         <label for="cantidad">CANTIDAD</label>
         <input type="number" name="cantidad">
      </p>
      <p>
         <label for="descripcion">DESCRIPCION</label>
         <textarea name="descripcion" id="" cols="30" rows="10"></textarea>


      </p>

   </table>
   <input type="submit" value="REGISTRARME" class="AÑADIR">
</form>

</html>