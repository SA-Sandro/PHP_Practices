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
        $valor = 0;
        $arrayNumeros = array();
        for ($fila = 0; $fila < 6; $fila++) {
            for ($columna = 0; $columna < 6; $columna++) {
                $valor++;
                if ($valor < 10) {
                    $arrayNumeros[$fila][$columna] = "0" . $valor;
                } else {
                    $arrayNumeros[$fila][$columna] = $valor;
                }

            }
        }
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