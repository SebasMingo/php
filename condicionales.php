<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera web</title>
</head>
<body>
    <h1>tienda online</h1>
    <?php
        $edad = 7;
        if($edad >= 18 && $edad <70) {
            echo "Eres mayor";
            header("Location: https://www.google.com");
            exit;
        }else if( $edad < 18 && $edad > 11){
            $mensaje = "<sript> alert('Tas chiquito'); </script>";
            echo $mensaje;
        }else{
            header("Location: https://www.youtube.com");
            exit;
        }
    ?>
</body>
</html>