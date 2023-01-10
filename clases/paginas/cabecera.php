<?php
require_once __DIR__ . "./../usuario/usuario.php";
require_once __DIR__ . "./../../../proyecto_joyeria/httpTools/httpTools.php";


httpTools::iniciarSesion();
$logeado = false;
$perfil;
if (isset($_SESSION["perfil"])) {
   $logeado = true;
   $perfil = $_SESSION["perfil"];
}


?>

<html>

<head>
   <meta charset="utf-8">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/2d6e2eefc4.js" crossorigin="anonymous"></script>
</head>

<!--CABECERA 1 1) Nombre de la empresa 2) Inicio Sesion 3) Carrito 4) Buscador -->

<header>

   <?php if ($logeado) : ?>

      <nav class="navbar navbar-expand-lg bg-dark">
         <!--<div class="container-fluid">
         <img src="./../../img/Logo.png" alt="" a>   
         <a class="navbar-brand" href="./../../../proyecto_joyeria/index.php" style="color:white">JOYERIA MATOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" 
               aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

         <div class="collapse navbar-collapse" id="navbarScroll">-->
         <div class="">
            <a href="./../../../proyecto_joyeria/index.php">
               <img src="/../PROYECTO/img/Logo.png" title="Inicio" alt="Logo Inicio de Página" width="180px">
            </a>
         </div>
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
               <a class="nav-link" href="./../../../proyecto_joyeria/clases/usuario/perfil.php" style="color:white"> <?php echo $perfil->nombres; ?></a>
            </li>
            <i class="fa-solid fa-circle-user" style="color:white" class="USER"></i>
         </ul>
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">

               <a class="nav-link" href="./../../../proyecto_joyeria/clases/paginas/salir.php" style="color:white">SALIR</a>

            </li>
            <i class="fa-solid fa-cart-shopping" style="color: white;" class="USER"></i>
         </ul>
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">

               <a class="nav-link" href="./../../../proyecto_joyeria/carrito/carrito.php" style="color:white"> CARRITO</a>

            </li>
            <i class="fa-solid fa-cart-shopping" style="color: white;" class="USER"></i>
         </ul>

         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
               <a class="nav-link" href="#" style="color:white"> MIS PEDIDOS</a>
            </li>
            <i class="fa-solid fa-truck-fast" style="color:white" class="USER"></i>
         </ul>

         </div>
         </div>

      </nav>
</header>
<header>
<?php else :  ?>
   <nav class="navbar navbar-expand-lg bg-dark">
      <!--<div class="container-fluid">
         <img src="./../../img/Logo.png" alt="" a>   
         <a class="navbar-brand" href="./../../../proyecto_joyeria/index.php" style="color:white">JOYERIA MATOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" 
               aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

         <div class="collapse navbar-collapse" id="navbarScroll">-->
      <div class="">
         <a href="./../../../proyecto_joyeria/index.php">
            <img src="/../PROYECTO/img/Logo.png" title="Inicio" alt="Logo Inicio de Página" width="180px">
         </a>
      </div>
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
         <li class="nav-item">
            <a class="nav-link" href="./../../../proyecto_joyeria/form/inicioSesion.php" style="color:white"> INICIO SESION</a>
         </li>
         <i class="fa-solid fa-circle-user" style="color:white" class="USER"></i>
      </ul>
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
         <li class="nav-item">

            <a class="nav-link" href="./../../../proyecto_joyeria/carrito/carrito.php" style="color:white"> CARRITO</a>

         </li>
         <i class="fa-solid fa-cart-shopping" style="color: white;" class="USER"></i>
      </ul>

      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
         <li class="nav-item">
            <a class="nav-link" href="#" style="color:white"> MIS PEDIDOS</a>
         </li>
         <i class="fa-solid fa-truck-fast" style="color:white" class="USER"></i>
      </ul>

      </div>
      </div>

   </nav>
</header>
<header>
<?php endif  ?>
<!--CABECERA 1 1) Nombre de la empresa 2) Inicio Sesion 3) Carrito 4) Buscador -->
<nav class="navbar navbar-expand-lg bg-ligth">
   <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:black">COLLARES</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
               <a class="nav-link" href="#" style="color:black"> HOMBRES</a>
            </li>

         </ul>
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
               <a class="nav-link" href="#" style="color:black"> NIÑOS</a>
            </li>

         </ul>
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
               <a class="nav-link" href="#" style="color:black"> PENDIENTES</a>
            </li>

         </ul>

         <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" style="color:black">BUSCAR</button>
         </form>
      </div>
   </div>
</nav>
</header>



</html>