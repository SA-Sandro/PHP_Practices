<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario principal</title>
    <style>
        .mainContainer {
            padding: 50px;
            display: grid;
            justify-content: center;
        }

        form {
            display: grid;
            width: 50%;
            justify-items: center;
        }

        .formContainer {
            display: grid;
            justify-content: center;
        }

        label {
            display: grid;
            justify-content: center;
            padding: 10px;
        }

        button {
            width: 70px;
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
            <?php
                session_start();

                $usuario = $_SESSION["usuario"];
                $contraseña = $_SESSION["contra"];
                
                if ($usuario == "Sandro" && $contraseña == "1234"){
                    echo "Los datos introducidos fueron correctos!";
                }else{
                    header("Location:index.html");
                }

            ?>
        </div>
    </div>
</body>

</html>