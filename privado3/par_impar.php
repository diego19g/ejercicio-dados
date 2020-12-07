<?php

include('../menu/menu.php');


$suma=0;

if(isset($_REQUEST['comprobar']))
{
    for ($i = 0; $i <= 3; $i++) {
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
        $suma+=$numero;
    }
    
    if($_REQUEST['par_impar']==2){
        if($suma%2==0){
            echo "<script>alert('Has acertado. La suma de los números es PAR.');</script>";
        }else{
            echo "<script>alert('NO has acertado. La suma de los números es IMPAR.');</script>";
        }
        
    }
    if($_REQUEST['par_impar']==1){
        if($suma%2!=0){
            echo "<script>alert('Has acertado. La suma de los números es IMPAR.');</script>";
        }else{
            echo "<script>alert('NO has acertado. La suma de los números es PAR.');</script>";
        }
        
    }

}

else{
    echo'<!DOCTYPE html>
    <html>
    <head>
    <title>Par / Impar</title>
    <link href="../estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <form>
        <input type="radio" name="par_impar" value="2" checked="checked"/>PAR
        <br>
        <input type="radio" name="par_impar" value="1"/>IMPAR
        <br>
        <input type="submit" value="Comprobar" name="comprobar" "/>
    </form>
    </body>
    </html>
    ';
}





