<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

$barra=[
    [
        "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
    ],
    [
         "TEXTO"=> "Relación 8", 
    ]
];
//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACIÓN 8",$barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>
    <br>
    <a href="../personalizar/index.php">Página inicio de personalizar</a> <br><br>
    <a href="../personalizar/personalizar.php">Página para personalizar colores</a> <br><br>
    <a href="../texto/verTextos.php">Ver textos</a>
 
 

<?php
}