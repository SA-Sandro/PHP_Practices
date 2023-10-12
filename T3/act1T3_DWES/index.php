<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act1T3</title>
</head>

<body>
    <!-- Implementar un programa PHP que define 2 variables, una de tipo entero y otra de tipo String. En temas
posteriores automatizaremos la toma de valores con formularios, pero ahora lo haremos de forma manual
definiendo al inicio del código el valor de estas variables.
A continuación, se debe comprobar que si la cadena de texto es “User 1” y el número es “1234”,
contemplándose las siguientes salidas:
• Si solo es igual la cadena de texto: “Lo siento, el usuario es correcto, pero la contraseña no”
• Si solo es igual el número: “Lo siento, este usuario no es válido”
• Si ninguna de las dos es correcta: “No has acertado ninguna”
• Solo si las dos son iguales: “Genial, puedes pasar!!”  -->

    <div>
        <h1>
            <?php
            $entero = 12324;
            $estring = "Use2r 2";
            //Realización con if-else anidados.
            if ($entero == 1234 && $estring == "User 1") {
                echo "Genial, puedes pasar";
            } elseif ($entero != 1234 && $estring == "User 1") {
                echo "Lo siento, el usuario es correcto, pero la contraseña no";
            } elseif ($entero == 1234 && $estring != "User 1") {
                echo "Lo siento, este usuario no es válido";
            } else {
                echo "No has acertado ninguna";
            }
            ;




            ?>
        </h1>
    </div>



</body>

</html>