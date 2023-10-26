<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación de la conexión</title>
    <style>
        .mainContainer {
            padding: 50px;
            display: grid;
            justify-content: center;
        }

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
        .phpContainer{
            text-align: center;
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
        <div class="phpContainer">
            <p>
                <?php
                if (!session_id()) {
                    session_start();
                }
                echo "La sesión de " . $_SESSION["usuario"] . " se ha cerrado";
                session_destroy();


                ?>
            </p>
        </div>
</body>

</html>