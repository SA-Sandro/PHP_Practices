<?php
$usuario = $_GET["usuario"];
$numero = $_GET["numero"];

$resultado = validarUsNum($numero, $usuario);
function validarUsNum($numero, $usuario)
{

    if ($usuario == "User 1" && $numero != 1234) {
        $mensaje = "Lo siento, el usuario es correcto, 
            pero la contraseña no";
        return $mensaje;
    } elseif ($usuario != "User 1" && $numero == 1234) {
        $mensaje = "Lo siento, este usuario no es válido";
        return $mensaje;
    } elseif ($usuario != "User 1" && $numero != 1234) {
        $mensaje = "No has acertado ninguna";
        return $mensaje;
    } else {
        $mensaje = "Genial, puedes pasar!!";
        return $mensaje;
    }
}

echo $resultado;
?>