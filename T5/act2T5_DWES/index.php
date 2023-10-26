<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Cookies</title>
    <style>
        .divContainer {
            display: flex;
            justify-content: center;
        }

        .epesito {
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="divContainer">
        <p class="epesito">
            <?php
            $name = "contador";
            $nombre = "Sandro";
            setcookie($nombre, $nombre, time() + 365 * 24 * 60 * 60, "/");

            if (isset($_COOKIE['contador'])) {
                setcookie($name, $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
            } else {
                setcookie($name, 1, time() + 365 * 24 * 60 * 60);
            }

            echo "EL usuario " . $_COOKIE[$nombre] . " ha iniciado sesión " . $_COOKIE["contador"] . " veces."
                ?>
        </p>

    </div>
</body>

</html>