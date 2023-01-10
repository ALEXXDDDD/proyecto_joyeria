<?php
require_once __DIR__ . "./../../proyecto_joyeria/productos/detalleAdapter.php";
require_once __DIR__ . "./../../proyecto_joyeria/productos/productoAdapter.php";
require_once __DIR__ . "./../../proyecto_joyeria/administrador/cabbeceraVendedor.php";

$id = $_GET['idproducto'];
echo "Detalle del producto con el ID" . $id;
echo "<br>";
$detalle = detalleAdapter::obtenerDetalle($id);
?>
<html>

<body>
   <?php if ($detalle == null) : ?>
      <p><?php echo "NO EXISTE TAL PRODUCTO"; ?></p>
   <?php else : ?>
      <h4>CATEGORIA</h4>
      <p><?php echo "$detalle->categoria"; ?> </p>
      <h4>MATERIAL</h4>
      <p><?php echo "$detalle->material"; ?></p>
      <h4>PRECIO</h4>
      <p><?php echo "$detalle->precio"; ?></p>
      <h4>STOCK</h4>
      <p><?php echo "$detalle->cantidad_stock"; ?></p>
      <h4>DESCRIPCION</h4>
      <p><?php echo "$detalle->descripcion"; ?></p>








   <?php endif; ?>


</body>

</html>