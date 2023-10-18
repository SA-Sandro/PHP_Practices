<?php
$usuario = $_POST["usuario"];
$contrasenia = $_POST["contraseña"];
// Añadimos el contenido del formulario a variables

$mensaje = validarUsuario($usuario, $contrasenia);
$mensaje2 = validarContraseña($contrasenia, $usuario);

// Creamos dos funciones individuales que se encargan de validar el usurio y la contraseña respectivamente. 
// Pasando por parámetros las variables previamente creadas
function validarUsuario($usuario, $contrasenia)
{
    //strlen hace un conteo de los caracteres de un string
    if ((strlen($usuario) > 6 && strlen($usuario) < 15) && $usuario !== $contrasenia) {
        $variable = "Usuario correcto";
        return $variable;
    } else {
        $variable = "Usuario incorrecto. Recuerde que solo se permiten letras y números";
        return $variable;
    }
}
function validarContraseña($contrasenia, $usuario)
{
    //ctype_digit básicamente se encarga de ver si la variable que se le pasa contiene algún número o no
    if (strlen($contrasenia) == 7 && ctype_digit($contrasenia) == false && $contrasenia !== $usuario) {
        $variable2 = "Contraseña correcta";
        return $variable2;
    } else {
        $variable2 = "Contraseña incorrecta, recuerde que solo se permite letras.";
        return $variable2;
    }
}
//Imprimimos el resultado de la validación
echo $mensaje . "<br> " . $mensaje2;
?>