<html>
    <head>
        <title>Tirada de dados</title>
        <link href="../estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <?php
include('../menu/menu.php');

for ($i = 0; $i <= 5; $i++) {
    $numero = rand(1, 6);
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
}
?>
    </body>
</html>

