<?php

$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$contraseña = isset($_POST["contraseña"]) ? $_POST["contraseña"] : "";
$hostname = "ldap.forumsys.com";
$port = 389;

//Nos conectamos al servidor LDAP

$id_conexion = ldap_connect($hostname, $port);
ldap_set_option($id_conexion, LDAP_OPT_PROTOCOL_VERSION, 3);
if (!$id_conexion) {
    die("No se pudo conectar con el servidor LDAP");
} else {
    $enlace_correcto = ldap_bind($id_conexion, $usuario, $contraseña);

    if ($enlace_correcto) {
        echo "Autentificación correcta " . $usuario;
    } else {
        echo "Autentificación incorrecta";
    }
}

?>