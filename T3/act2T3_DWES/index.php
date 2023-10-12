<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Implementar un programa PHP que cree una matriz de 6x6, es decir, de 36 posiciones. Para rellenar los
huecos tienes que utilizar sentencias de tipo bucle, por ejemplo, puedes utilizar un foreach que recorre el
array central y dentro de cada una de estas posiciones utilizar otro que recorrerá los arrays individuales.
El contenido de cada posición será un número del 1 al 36 -->
    <div>


        <?php
        $arrayNumeros = array(
            "primerArray" => array("01", "02", "03", "04", "05", "06"),
            "segundoArray" => array("07", "08", "09", "10", "11", "12"),
            "tercerArray" => array("13", "14", "15", "16", "17", "18"),
            "cuartoArray" => array("19", "20", "21", "22", "23", "24"),
            "quintoArray" => array("25", "26", "27", "28", "29", "30"),
            "sextoArray" => array("31", "32", "33", "34", "35", "36")
        );
        //Ejercicio realizado usando foreach
        // foreach ($arrayNumeros as $key=>$valor){
        //     foreach($valor as $otroValor)
        //     echo ($otroValor);
        //         if($otroValor%6===0){
        //             echo "</br>";
        //         };
        // };
        //Ejercicio realizado usando for anidados (menos óptimo)
        $keys = array_keys($arrayNumeros);

        $arrayContado = count($keys);

        for ($k = 0; $k < $arrayContado; $k++) {
            $key = $keys[$k];
            $subArray = $arrayNumeros[$key];
            $total = count($subArray);
            for ($j = 0; $j < $total; $j++) {
                echo $subArray[$j], " ";
            }
            echo "</br>";
        }
        ;



        ?>


    </div>


</body>

</html>