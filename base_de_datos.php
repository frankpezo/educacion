<?php

$contraseña = "";
$usuario = "";
$nombreBaseDeDatos = "RETAIL";
$rutaServidor = "LAPTOP-A7ED93UJ";

try{
    $base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

} catch(Exception $e){
    echo "Ocurrió un error en la base de datos: " . $e->getMessage();
}

?>