<?php

$controladaor = opendir(".");

$archivo = readdir($controlador);
while ($archivo != false)
{
    echo $archivo. "<br>";
    $archivo = readir($cotrolador);
}  

closedir($controlador);

?>