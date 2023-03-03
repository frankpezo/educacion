<?php 
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("select libros, codigoLibro, nombreLibro from co.libros");
$libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php include_once "encabezado.php" ?>

<div class="row">
    <div class="col-12">
        <h1>Listar con arreglo</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Codigo Libro</th>
                        <th>Nombre Libro</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($libros as $libro){ ?>
                        <tr>
                            <td><?php echo $libro-> libros ?></td>
                            <td><?php echo $libro->codigoLibro ?></td>
                            <td><?php echo $libro->nombreLibro ?></td>
                            <td><a class="btn btn-warning" href="<?php echo "editar.php?id=". $libro->libros?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=". $libro->libros?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once "pie.php" ?>