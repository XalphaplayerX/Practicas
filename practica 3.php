<?php
$diaActual = date("j");

$mesActual = date("m");

$annoActual = date("Y");


$nombreMeses[1] = "Enero";
$nombreMeses[2] = "Febrero";
$nombreMeses[3] = "Marzo";
$nombreMeses[4] = "Abril";
$nombreMeses[5] = "Mayo";
$nombreMeses[6] = "Junio";
$nombreMeses[7] = "Julio";
$nombreMeses[8] = "Agosto";
$nombreMeses[9] = "Septiembre";
$nombreMeses[10] = "Octubre";
$nombreMeses[11] = "Noviembre";
$nombreMeses[12] = "Diciembre";
?>
<html xmlns="http://wwww.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title> Calendario</title>
    </head>
    <body>

        <?php
        foreach ($nombreMeses as $numeroMes => $nombreMes) {
            echo $nombreMes . '<br>';
        }
        echo'<table border="#CCCCCC">';
        echo'<td>L</td>';
        echo '<td>M</td>';
        echo '<td>X</td>';
        echo '<td>J</td>';
        echo '<td>V</td>';
        echo '<td>S</td>';
        echo '<td>D</td>';
        echo '</tr>';

        $primeroMes = mktime(0, 0, 0, $numeroMes, 1, $anno_actual);

        $diaPrimeroMes = date("W", $primeroMes);

        if ($diaPrimeroMes == 0) {
            $diaPrimeroMes = 7;
        }

        $columna = 1;

        echo'<tr>';

        for ($i = 1; $I < $diaPrimeroMes; $i++) {
        {
            echo '<td></td>';
            $columna++;
        }
        
        for($dia = 1; $dia <= 31; $dia++)
        {
            if(checkdate($mesActual, $dia, $annoActual))
            {  
                if($dia == $diaActual)
                    
                    {
echo'<td
                  
     bgcolor="#FFFF66"><strong>'.$dia.'</strong></td>';

 else 
     
     echo'<td>'.$dia.'<td>';
 
 $columna++;
 
 if ($columna == 8) {
                        echo '</tr>';
                    }
                    echo '</tr>';
 
 $columna = 1;
 
                    }
                    
            }
            
            
        }
        
        ?>
    </table>
    
    </body>
    
</html>