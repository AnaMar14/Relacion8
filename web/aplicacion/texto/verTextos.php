<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

$textos=[];
$contenidoTextArea="";
$barra=[
     [
       "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
     ],
       [ 
       "TEXTO"=> "Relación 8",   
       "ENLACE" =>"/aplicacion/relacion8/index.php",
     ], 
       [ 
       "TEXTO"=> "Ver textos",   
     ] 
];

if(isset($_POST["registrar"])){
  $nuevoTexto=trim($_POST["textoRegistro"] ?? "");

  if($nuevoTexto!==""){
      array_push($textos,new RegistroTexto($nuevoTexto));
   
  }
  
  foreach($textos as $lineaTexto){
    $contenidoTextArea.= "\n". $lineaTexto;
  }
  
}
//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("Ver textos",$barra);
cuerpo($contenidoTextArea);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() 
{
    ?>
    
<!--esto va en el head-->
<?php

}

//vista
function cuerpo($contenidoTextArea)
{
?>
  <br>
  <form method="post">
    <input type="text" name="textoRegistro" id="textoRegistro">
    <input type="submit" value="Registrar" name="registrar">
    <br>
    <br>
    <label for="textosRegistrados">Textos registrados por el usuario:</label> <br>
    <textarea name="textosRegistrados" id="textosRegistrados" rows="10" cols="50" value="a"><?=$contenidoTextArea ?></textarea>
    <br>
    <button id="limpiar" name="limpiar">Limpiar</button>
  </form>
   
<?php


   
}

//al final se ponen las funciones

