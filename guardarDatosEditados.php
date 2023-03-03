<?php

//1. Para determinar que los campos estén vacíos
if( !isset($_POST['id'])  || !isset($_POST['codigo'])  || !isset($_POST['nombre']) ||  !isset($_POST['tipo'] )|| !isset($_POST['empresa']) ){
    exit();
}
//Ahora.

//2. Incluimos la base de datos
include_once 'base_de_datos.php';
//2.1. Utilizamos el método POST
$idLibro = $_POST['id'];
$codigo = $_POST['codigo'];
$nombre = strtoupper($_POST['nombre']);
$tipo = $_POST['tipo'];
$empresa = $_POST['empresa'];

//3. Hacemos la consulta
$sentencia = $base_de_datos->prepare("UPDATE co.libros SET codigoLibro = ?, nombreLibro = ?, tipoLibro = ?, empresa = ? WHERE libros =?;");
$resultado = $sentencia->execute([ $codigo, $nombre, $tipo, $empresa, $idLibro]);


//4. Si todo va bien lo mandamos a que se visulice el campo modificado en la lista
if($resultado === true){
    header('Location: listar.php');
}else{
    echo 'Algo salió mal. Por favor verifique que la tabla exista, así como el ID del usuario';
} 



?>