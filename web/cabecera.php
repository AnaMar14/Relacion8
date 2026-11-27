<?php 
define("RUTABASE", dirname(__FILE__));
//define("MODO_TRABAJO","produccion"); //en "produccion o en desarrollo
define("MODO_TRABAJO","desarrollo"); //en "produccion o en desarrollo
date_default_timezone_set("Europe/Berlin");
if (MODO_TRABAJO=="produccion")
    error_reporting(0);
    else 
        error_reporting(E_ALL);  

spl_autoload_register(function ($clase){
    $ruta=RUTABASE."/scripts/clases/";
    $ruta2=RUTABASE . "/aplicacion/clases/";

    
    $fichero=$ruta."$clase.php";
    $fichero2=$ruta2."$clase.php";
    
    if (file_exists($fichero))
        {
            require_once($fichero);

        } else if(file_exists($fichero2)){
            require_once($fichero2);
        }
      else
        {
            throw new Exception("La clase $clase no se ha encontrado.");
        }
});

include(RUTABASE."/aplicacion/plantilla/plantilla.php");

const COLORESTEXTO=[
    "Negro"=> "black",
    "Rojo"=> "red",
    "Verde"=> "green",
    "Blanco"=> "white"
];
const COLORESFONDO=[
    "Blanco"=> "white",
    "Negro"=> "black",
    "Beige"=> "beige",
    "Rosa"=> "pink",
    "Azul"=> "blue"
];



if(isset($_COOKIE["fondo"])){
    $fondo=$_COOKIE["fondo"];
}

if(isset($_COOKIE["texto"])){
    $texto=$_COOKIE["texto"];
}
//creo todos los objetos que necesita mi aplicación