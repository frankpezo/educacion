<?php

//1. Para salir si los datos no se presentan
if(!isset($_POST['codigo']) || !isset($_POST['nombre']) || !isset($_POST['tipo']) || !isset($_POST['empresa']) ){
   exit();
}

//2. Si todo va bien se debe ejecutar el código 
//2.1. Llamamos
include_once 'base_de_datos.php';
//2.2. Utilizamos el método post
$codigo= $_POST['codigo']; 
$nombre = strtoupper($_POST['nombre']); //Para convertir en mayúsculas
$tipo = $_POST['tipo'];
$empresa = $_POST['empresa'];

//3. Como tenemos el archivo de conexión aquí, creamos una sentencian que nos permita ingresar los datos
$sentencia = $base_de_datos->prepare("INSERT INTO co.libros(codigoLibro, nombreLibro, tipoLibro, empresa) VALUES(?,?,?,?)");
$resultado = $sentencia->execute([$codigo, $nombre, $tipo, $empresa]);

//4. Hacemos una condicional
if($resultado === true){
    header("Location: listar.php");
}else{
    echo "Algo salió mal. Verifique que la tabla exista";
}


?>