<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .sessionIni {
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
        <div class="phpContainer">
            <p class="sessionIni">
                <?php
                session_start();

                if (isset($_POST["usuario"]) && isset($_POST["contra"])) {
                    // Realizar la validación y el procesamiento seguro de los datos POST antes de almacenarlos en variables de sesión.
                
                    // Ejemplo de almacenamiento seguro de un nombre de usuario en una variable de sesión:
                    $_SESSION["usuario"] = filter_var($_POST["usuario"], FILTER_SANITIZE_STRING);
                    $_SESSION["contra"] = filter_var($_POST["contra"],FILTER_SANITIZE_STRING);
                    // No debes almacenar contraseñas en variables de sesión; asegúrate de manejarlas de forma segura.
                
                    echo "La sesión se ha iniciado.";
                } else {
                    echo "Faltan datos de usuario o contraseña.";
                }
                ?>
            </p>
        </div>
</body>

</html>