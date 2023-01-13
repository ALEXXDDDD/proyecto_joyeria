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

   <body>
      <table class="table">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Nombre del Producto</th>
               <th scope="col">Precio de Venta</th>
               
            </tr>
         </thead>
         <?php foreach ($produc as $p) :  ?>
            <tbody>
               <tr>
                  <th scope="row"><?php echo $p->idproducto; ?></th>
                  <td><?php echo $p->nombre_producto; ?></td>
                  <td><?php echo $p->precio; ?></td>
                 

                  <td><a href="./eliminarProducto.php?idproducto= <?php echo $p->idproducto; ?>">
                        ELIMINAR
                     </a>
                  </td>
                  <td>
                     <a href="./listarDetalle.php?idproducto= <?php echo $p->idproducto; ?>">VER DETALLE</a>
                  </td>


               </tr>


            </tbody>
         <?php endforeach; ?>
      </table>
      <a href="./../form/formularioProducto.php">REGISTAR PRODUCTOS</a>
   </body>

</html>