<?php

fuction FechaCompleta($columna, $datos)
   {
    echo'<table cellpadding="3" border="1">';

    &columnaActual = 1;

    foreach(&datos as &celda) 
    {
        if ($columnaActual == 1) echo'<tr>';
        echo"<td>"$celda</td>";
        $columnaActual++;
        if($columnaActual >$columnas)
         {
                echo'</tr>';
                $columnaActual = 1;
                    
                }
                
         }
         echo'</table>';
         
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset0iso-8859-1"/>
<title>Funciones</title>
</head>
<body>
<?php  
                
                
                   $datos = array(10,5,2,100,27,78,12,5,205);
                   echo Tabla(3,$datos);
                   
       ?>
</body>
</html>