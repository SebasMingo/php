<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
    <style>
        .estilo_par{
            color:red;
        }
    </style>
</head>
<body>
    <?php
    //imprimir los numeros pares en rojo e impares en verde del 1 al 100
    for($x = 1 ; $x <=100 ; $x++){

        //el numero es par si el resto de dividir entre dos es cero
        if($x %2 == 0){
            echo "<p class'estilo_par'> $x </p>";
        }else{
            //impar
            echo "<p class='estilo_impar'> $x </p>";
        }
    }
    ?>
</body>
</html>