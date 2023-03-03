<?php
/*
CRUD con SQL Server y PHP
================================
Este archivo muestra un formulario que
se envía a insertar.php, el cual guardará
los datos
================================
*/
?>
<?php include_once "encabezado.php" ?>
<div class="row">
	<div class="col-12">
		<h1>Agregar</h1>
		<form action="insertar.php" method="POST">
			<div class="form-group">
				<label for="nombre">Codigo</label>
				<input required name="codigo" type="text" id="codigo" placeholder="Codigo del Libro" class="form-control">
			</div>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input required name="nombre" type="text" id="nombre" placeholder="Nombre del Libro" class="form-control">
			</div>
			<div class="form-group">
				<label for="nombre">Tipo</label>
				<input required name="tipo" type="text" id="tipo" placeholder="Tipo de Libro" class="form-control">
			</div>
			<div class="form-group">
				<label for="edad">Empresa</label>
				<input required name="empresa" type="number" id="empresa" placeholder="Empresa" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar.php" class="btn btn-warning">Ver todas</a>
		</form>
	</div>
</div>
<?php include_once "pie.php" ?>