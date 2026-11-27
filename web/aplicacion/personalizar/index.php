<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

//cada vez que se carga el documento php sobreescribe la cookie
//añadiendole +1 al valor de la cookie antes de entrar
$visitas=isset($_COOKIE["visitas"])? (int)$_COOKIE["visitas"]:0;
$visitas++;
setcookie("visitas",$visitas, time() + 60*60*24);

$barra=[
     [
       "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
     ],
       [ 
       "TEXTO"=> "Relacion 8",   
       "ENLACE" =>"/aplicacion/relacion8/index.php",
     ], 
       [ 
       "TEXTO"=> "Personalización",   
     ] 
];
//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Personalización");
cabecera();
finCabecera();
inicioCuerpo("Personalización",$barra);
cuerpo($visitas);  //llamo a la vista
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
function cuerpo($visitas)
{
?>
<h3>Veces accedidas a la página: <?= $visitas ?></h3>
    <h2>Pasos del método científico</h2>
    <p>Los pasos del método científico son seis etapas ordenadas que permiten investigar un fenómeno y comprobar si una explicación es verdadera:<br><br>
        1. Observación: Identificar un fenómeno, problema o comportamiento en la realidad utilizando los sentidos o instrumentos de medición.<br><br>
        2. Planteamiento del problema (Pregunta): Formular una pregunta clara, específica y medible sobre lo que se ha observado (por ejemplo, ¿por qué ocurre esto? o ¿qué efecto tiene X sobre Y?).<br><br>
        3. Formulación de la hipótesis: Proponer una posible respuesta o explicación lógica a la pregunta. Debe ser una afirmación que se pueda poner a prueba.<br><br>
        4. Experimentación: Diseñar y realizar pruebas controladas para comprobar si la hipótesis es cierta o falsa, midiendo variables y anotando todo lo que sucede.<br><br>
        5. Análisis de resultados: Organizar, comparar e interpretar los datos obtenidos durante el experimento (usando tablas, gráficos o cálculos) para ver si respaldan la hipótesis.<br><br>
        6. Conclusión y comunicación: Determinar si la hipótesis se acepta o se rechaza. Si es falsa, se formula una nueva hipótesis y se repite el proceso; si se confirma, se comparten los hallazgos con los demás.<br><br>
    </p>
    
   
<?php

   
}

//al final se ponen las funciones

