<?php

//Códigos de estado 400
//Los estados 400 se corresponden a errores del cliente y con frecuencia sí los verás. Es el caso del archiconocido error 404, que aparece cuando la página que has intentado buscar no existe. Es, por tanto, un error del cliente (la dirección web estaba mal).

//400 Bad Request: algo ha ido mal con la petición. Si recibes este error, prueba a refrescar la página o actualizar tu navegador.
//401 Unauthorized: no tienes permiso para recibir ese contenido.
//402 Payment Required: en desuso por ahora.
//403 Forbidden: la petición es correcta pero el servidor se niega a ofrecerte el recurso o página web. Es posible que necesites una cuenta en el servicio e iniciar sesión antes de poder acceder.



?>
<html>

<head>
   <link rel="stylesheet" href="./../css/errorCSS.css">
</head>

   <body>
      <h1 class="TITULO-404">ERROR EN VERFICAR INFORMACION</h1>
      <div>
         <p class="SUBTITULO">
            POR FAVOR INCIE SESION 
         </p>
         <p>
            PARA QUE USTED PUEDA ACCEDER A LA PAGINA 
         </p>
      </div>
      <div>
         <p class="A-INICIAR SESION">
            <a href="./../form/inicioSesion.php">Iniciar Sesion</a>
         </p>
      </div>
      <div class="IMAGEN-ERROR">
         <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-uy-error-404-robot-roto_114360-1920.jpg?w=740&t=st=1673118239~exp=1673118839~hmac=fcd6be7ef01a292ff477b0a3dba8cbcd56d045f26a75d745c45ec62ee407afaa" 
         alt="">
      </div>
   </body>

</html>