<?php
require_once __DIR__ . "./../../proyecto_joyeria/administrador/cabbeceraVendedor.php";
require_once __DIR__ . "./../../proyecto_joyeria/productos/productoAdapter.php";
$produc = productoAdapter::listarProducto();

?>
<html>

<head>

</head>

<body>
   <h2>PRODUCTOS</h2>
   <h2>===========================</h2>
   <?php foreach ($produc as $p) :
   ?>
      <h2><?php echo $p->idproducto; ?></h2>
      <h2><?php echo $p->nombre_producto; ?></h2>
      <h2><?php echo $p->precio; ?></h2>
      <button><a href="./../form/formularioProducto.php">AGREGAR</a></button>
      <button>
         <a href="./eliminarProducto.php?idproducto= <?php echo $p->idproducto; ?>">
            ELIMINAR
         </a>
      </button>
      <button>
         <a href="./listarDetalle.php?idproducto= <?php echo $p->idproducto; ?>">VER DETALLE</a>
      </button>
      <button>
         <a href="./../../proyecto_joyeria/administrador/actualizarProducto.php?idproducto= <?php echo $p->idproducto; ?>">EDITAR</a>
      </button>
      <h2>===========================</h2>
      <h2><?php ?></h2>


   <?php endforeach ?>
</body>

</html>