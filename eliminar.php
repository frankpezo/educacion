<?php


//1. Conseguimos el get
   echo  $_GET["id"];
  if(!isset($_GET['id'])){
    exit();
  }

//2. 
$id = $_GET['id'];
//2.1. 
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM co.libros WHERE libros = ?");
 $resultado = $sentencia-> execute([$id]); 
//3.   Que nos devuelva  a la lista
if($resultado === true){
    header("Location: listar.php");
}else{
    echo "Algo salió mal. Verifique que la tabla exista";
}
 




?>