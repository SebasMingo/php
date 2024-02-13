<?php
#condicional con if 
$edad = 20;
if($edad >= 18) {
        echo "Eres mayor de edad";
}else if ($edad < 18 && $edad >= 11) {
    echo "<br>Eres menor de edad";
}else{
    echo "<br>Error de datos";
}

switch($edad){
    case 18:
        echo "<br>Tienes 18";
        break;
    case 15:
        echo "<br>Tienes 15";
        break;
    default:
        echo "<br>Nada que celebrar";
}