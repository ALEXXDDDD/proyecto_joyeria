<?php

require_once __DIR__."./../coneccion.php";
require_once __DIR__ . "./../persona/persona2.php";

   class personaAdap {
      public  static function listarPersona(){
         $db=new Coneccion();                                  //=>abrimos la coneccion class coneccion
         $sql= "SELECT * FROM joyeria_matos.persona;";         //=>alacemamos la consulta en una variable sql
         $tabla=$db->consulta($sql);                           //=>llamamos a la funcion consulta de la class coneccion
         $db->close();                                         //=>cerramos la base
         $personas=personaAdap::estructurar($tabla);           //=>llamamos a la funcion estatica estructuras
         return $personas;                                     //=>returna el valor 

      } 

      public static function estructurar($tabla){
         $personas=[];                                      //ESTA FUNCION ME ESTRUCTURA CON LA CLASS DE PERSONA     
         foreach($tabla as $fila){
            $p=new Persona2(
               $fila['id_persona'],
            $fila['nombres'],
            $fila['apellidos'],
            $fila['telefono'],
            $fila['direccion']
            );
            $personas[]=$p;
         }
         return $personas;
         
      }
      static function crearPersona ($persona)
      {
         $db=new Coneccion();
         $sql= "INSERT INTO `joyeria_matos`.`persona`
               (
               `nombres`,
               `apellidos`,
               `telefono`,
               `direccion`)
               VALUES
               (
               '$persona->nombres',
               '$persona->apellidos',
               '$persona->telefono',
               '$persona->direccion');";
         $resp=$db->insertar($sql);
         $db->close();
         return $resp;
      }
      public static function estruturarTecnico($id)
      {                                                                             
         $db=new Coneccion();
         $sql="SELECT * FROM joyeria_matos.persona WHERE id_persona=$id;";
         $tabla=$db->consulta($sql);
         $db->close();
         $p=personaAdap::estructurar($tabla);
         if (count($p)>0) {
            # code...
            return $p[0];
         }
         else
         {
            echo "NO EXISTE TAL EMPLEADO";
         }
      }
   }


?>