<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

if(isset($_POST["guardarColores"])){
    $nuevoFondo= $_POST["colorFondo"] ?? "white";
    $nuevoTexto= $_POST["colorTexto"] ?? "white";
    setcookie("colorFondo",$nuevoFondo,time()+60*60*24);
    setcookie("colorTexto",$nuevoTexto,time()+60*60*24);

    $fondo=$nuevoFondo;
    $texto=$nuevoTexto;
}

$barra=[
     [
       "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
     ],
       [ 
       "TEXTO"=> "Personalizar colores",   
       "ENLACE" =>"/aplicacion/relacion8/index.php",
     ], 
       [ 
       "TEXTO"=> "Personalizar colores",   
     ] 
];
//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("Personalizar colores");
cuerpo();  //llamo a la vista
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
function cuerpo()
{
?>
    <form method="post">
    <label for="colorFondo">Colores de fondo:</label>
    <select name="colorFondo" id="">
        <?php
            foreach(COLORESFONDO as $nombreColor=>$valor){
                ?>
                <option value="$valor"> <?=$nombreColor?> </option>
                <?php
            }
        ?>
      
    </select>
    <br>
    <label for="colorTexto">Colores para el texto:</label>
    <select name="colorTexto" id="">
        <?php
            foreach(COLORESTEXTO as $nombreColor=>$valor){
                ?>
                <option value="$valor"> <?=$nombreColor?> </option>
                <?php
            }
        ?>
    </select>
    <br>
    <br>
    <input type="submit" name="guardarColores" value="Guardar configuración">
   </form>
<?php

   
}

//al final se ponen las funciones

