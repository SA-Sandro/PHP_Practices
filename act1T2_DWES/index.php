<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act1_T2</title>
</head>

<body>
    <?php
    $varInt = 23;
    $varString = "Sandro";
    $varBoolean = true;
    $varFloat = 10.3;

    /*Esto no lo pide el ejercicio, pero se puede apreciar que los condicionales son
    muy parecidos a los vistos en otros lenguajes*/

    if ($varBoolean) {
        $varBoolean = "verdad";
    }
    ;


    echo "Hola me llamo " . $varString . " y tengo" . $varInt . " años. " . " Mi brazo mide " . $varFloat .
        " y estoy diciendo la " . $varBoolean;
    ?>
</body>

</html>