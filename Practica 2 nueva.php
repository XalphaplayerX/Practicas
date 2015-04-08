<?php

$diaSemana = date("N"); //1=Lunes,.....6=Sabado, 7=Domingo
$hora = date("G");
$dia = date("J");
$mes = date("N");


if ($horaActual == 0) {

    header("Location: manetenimiento.php");
}

if ($diaSemana >= 6){

$festivo = true; 

}else if($mes== 7 || $mes== 8 || ($mes== 9 && dia < 15)){

$festivo = true;

}else if(($mes == 12 && $dia >= 21) || ($mes == 1 && $dia <= 7)){

$fetsivo = true;

} else {

    $festivo = false;
}




if($festivo){

header("Location:mejores-videos.php");
}

if (($hora >= 9 && $hora < 14) || ($hora >= 16 && $hora < 18)){
    //clase

header("Location: mejores-videos.php");
}

if (($hora >= 9 && $hora < 14) || ($hora >= 16 && $hora < 18)){

    //clase


header("Location: http:\\www.google.es");


}else {

    if ($hora == 14 || $hora == 15)
        header("Location: camara-comedor.php");
    else
        header("Location:mejores-videos.php");
}
?>














