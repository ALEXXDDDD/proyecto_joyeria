<?php
require_once __DIR__."./../../proyecto_joyeria/configuracion/config.php";
   class Coneccion {
      //CREAMOS UNA VARIABLE PRIVADA 
      private $conec;
      /**
       * PRIMERO LLAMAMOS A UN FUNCION CON UN CONSTRUCTOR 
       * AQUI SE HARA LA CONECCION A LA BASE DE DATOS CON LAS RESPECTIVAS VARIABLES DE getDBase
       * LUEGO CERRAMOS LA BASE DE DATOS
       * FINALMENTE CREAMOS UNA FUNCION DONDE VA A EJECUTAR LA CONSULTA 
       */
      function __construct()
      {
         $db= getDBase();
         $this->conec= mysqli_connect(
            $db['hostname'],//=>localhost
            $db['username'],//=>root
            $db['password'],//=>0805
            $db['database'],//=>joyeria_matos
            $db['port']      //=>3306
         );
         /**
          * => OTRA FORMA DE HACERLO SIN LLAMAR A LA FUNCION DE config.php = funciont getDBase(){ $bd=[]; return $bd;}
          * $this->conec=mysqli_connect(
            * 'localhost',
            *'root',
            *'0805',
            *'joyeria_matos',
            *3306  
            *);
          */
      }

      function close(){
         mysqli_close($this->conec);
      }
      function consulta($sql){
         $res= mysqli_query($this->conec, $sql);   //atributo que ejecuta la consulta 
         $tabla=[];                                //me devulve una tabla asi que lo alacemamos en un array vacio
         while ($fila= mysqli_fetch_assoc($res)){  //utilizamos while para que nos devuelva la tabla
            $tabla[]=$fila;
         }
         return $tabla;
      }
      function insertar($sql)
      {
         $res=mysqli_query($this->conec,$sql);
         if($res==true)
         {
            return mysqli_insert_id($this->conec);
         }
         else
         {
            return false;
         }
      }
      function eliminar($sql){
         $res= mysqli_query($this->conec,$sql);
         return $res;
      }
      function actualizar($sql){
         $res = mysqli_query($this->conec, $sql);
         return $res;
      }

   }
   


?>