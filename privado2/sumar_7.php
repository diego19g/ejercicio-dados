<html>
    <head>
        <title>Sumar 7</title>
        <link href="../estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<?php
include('../menu/menu.php');

echo "<b>Nº de intentos para que la suma sea 7</b><br>";


$contador = 1;
    
$numero = rand(1, 6);
$numero2 = rand(1, 6);
        
while($numero+$numero2!=7){
    $contador++;
    $numero = rand(1, 6);
    $numero2 = rand(1, 6);
}

switch ($numero) {
    case 1:
        echo ' <img src="../imagenes/uno.jpg" alt="uno" width="120" height="120">';
        break;
    case 2:
        echo ' <img src="../imagenes/dos.jpg" alt="dos" width="120" height="120">';
        break;
    case 3:
        echo ' <img src="../imagenes/tres.jpg" alt="tres" width="120" height="120">';
        break;
    case 4:
        echo ' <img src="../imagenes/cuatro.jpg" alt="cuatro" width="120" height="120">';
        break;
    case 5:
        echo ' <img src="../imagenes/cinco.jpg" alt="cinco" width="120" height="120">';
        break;
    case 6:
        echo ' <img src="../imagenes/seis.jpg" alt="seis" width="120" height="120">';
        break;
}
switch ($numero2) {
    case 1:
        echo ' <img src="../imagenes/uno.jpg" alt="uno" width="120" height="120">';
        break;
    case 2:
        echo ' <img src="../imagenes/dos.jpg" alt="dos" width="120" height="120">';
        break;
    case 3:
        echo ' <img src="../imagenes/tres.jpg" alt="tres" width="120" height="120">';
        break;
    case 4:
        echo ' <img src="../imagenes/cuatro.jpg" alt="cuatro" width="120" height="120">';
        break;
    case 5:
        echo ' <img src="../imagenes/cinco.jpg" alt="cinco" width="120" height="120">';
        break;
    case 6:
        echo ' <img src="../imagenes/seis.jpg" alt="seis" width="120" height="120">';
        break;
}

echo "<br>El número de veces que se ha intentado sumar 7 con dos dados ha sido: ".$contador;


?>
    </body>
</html>


