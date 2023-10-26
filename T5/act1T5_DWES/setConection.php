<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establecer la conexión</title>
    <style>
        nav ul li {

            border-radius: 10px;
            padding: 5px;
            background-color: lightblue;
            margin: 5px;
            display: inline-block;
        }

        a {
            list-style: none;
            color: black;
            text-decoration: none;
        }

        .mainContainer {
            padding: 50px;
            display: grid;
            justify-content: center;
        }

        p {
            text-align: center;
            font-size: 1.3rem;
        }
    </style>
</head>

<body>
    <div class="mainContainer">
        <div class="navContainer">
            <nav>
                <ul>
                    <li><a href="setConection.php">Establecer conexión</a></li>
                    <li><a href="deleteConection.php">Eliminar Conexión</a></li>
                    <li><a href="validacion.php">Validar usuarios</a></li>

                </ul>
            </nav>
        </div>
        <div>
            <p>
                <?php
                session_start();
                echo "¡Bienvenido " . $_SESSION["usuario"] . "!";
                ?>
            </p>
        </div>
    </div>



</body>

</html>