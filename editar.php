<?php
//1. Hacemos una validación  con el id
/* echo "ID: " . $_GET['id']; */
if(!isset($_GET['id'])){
    exit();
}

//2. EJecutamos el código 
//2.1. Llamamos
$id  = $_GET['id'];
/* print($id); */
//2.2. LLamamos a la base de datos
include_once 'base_de_datos.php';
/* echo "SELECT codigoLibro, nombreLibro, tipoLibro, empresa FROM co.libros WHERE libros = $id"; */
//2.3. Creamos una sentencia para buscar el id
$sentencia = $base_de_datos -> prepare("SELECT codigoLibro, nombreLibro, tipoLibro, empresa FROM co.libros WHERE libros = ?");
$sentencia -> execute([$id]);
//Para llamar a la fila lo hacemos con el fetch pero como objeto
$libro = $sentencia -> fetch(PDO::FETCH_OBJ); // $libro = $sentencia->fetchObject();
//2.4. Creamos una condicional que nos permita saber si el libro existe 
if(!$libro){
    #No existe
    echo "¡No existe algún libro con ese ID!";
    exit();
}

// Si todo va bien, se debe ejecutar el código
?>
<?php
//3. Incluimos el encabezaod
include_once "encabezado.php" ?>

<div class="row">
    <div class="col-12">
        <h1>Editar</h1>
        <!--Formulario-->
        <form action="guardarDatosEditados.php"  method="POST">
            <input type="text" name="id" value="<?php echo $id ?>" >
            <div class="form-group">
                <label for="codigo">Código</label>
                <input value="<?php echo $libro->codigoLibro; ?>" required name="codigo" type="text" id="codigo" placeholder="Código" class="form-control" >
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $libro->nombreLibro; ?>"  required name="nombre" type="text" id="nombre" placeholder="Nombre" class="form-control" >
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input value="<?php echo $libro->tipoLibro; ?>" required name="tipo" type="text" id="tipo" placeholder="Tipo" class="form-control" >
            </div>
            <div class="tipo">
                <label for="empresa">Empresa</label>
                <input value="<?php echo $libro->empresa; ?>" required name="empresa" type="text" id="empresa" placeholder="Empresa" class="form-control" >
            </div>
            <!-- <input type="text" name="id" value="<?php /* echo $libro->codigoLibro;  */?>"> -->
            <button class="btn btn-primary">Guardar</button>

        </form>
    </div>
</div>
