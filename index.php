<?php
require_once __DIR__ . "./../proyecto_joyeria/clases/paginas/cabecera.php";
?>


<html>
   <head>
      <meta charset="utf-8">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </head>

   <!--CARRUSEL -->
   <body>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="./img/fondos-de-pantalla-de-joyas-4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="./img/joyas-de-plata.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="./img/fondos-de-pantalla-de-joyas-5.jpg" class="d-block w-100" alt="...">
            </div>
         </div>
      </div>

      <div>
         <a href="./../proyecto_joyeria/administrador/listarProductos.php">PAGINA DEL VENDEDOR </a>
      </div>
   </body>
   



</html>
<?php
   require_once __DIR__."./clases/paginas/piePagina.php";
?>