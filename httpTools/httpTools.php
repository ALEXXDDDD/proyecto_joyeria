<?php
require_once __DIR__."./../clases/usuario/usuario.php";
   class httpTools{
      static function redireccionar ($ruta){
          header("Location: $ruta");
         die();
      }
      static function validarUsuario(){
         if(isset($_SESSION["perfil"]))
         {
            return true;
         }
         else{
            return false;
         }
      }
      static function iniciarSesion(){
         $status = session_status();
         if($status!= PHP_SESSION_ACTIVE) 
         {
            session_start();
         }
      }
      static function cerrarSesion(){
         httpTools::iniciarSesion();
         $status= session_status();
         if($status==PHP_SESSION_ACTIVE){
            session_destroy();
         }
      }
      static function validarUsuarioLogeado()
         {
            $seLogeo=httpTools::validarUsuario();
            if($seLogeo)
            {
               return;
            }
            else{
               httpTools::redireccionar("./../errores/404 notFound.php");
            }
          
         }
   
   }




?>