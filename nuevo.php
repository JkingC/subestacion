<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVA SUBESTACION</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off" name="form_sub">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="ubicacion" class="col-sm-2 control-label">Ubicacion Geografica</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicacion" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="entrada" class="col-sm-2 control-label">Tension de Entrada Kw</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="entrada" name="entrada" placeholder="Tension de Entrada Kw" required min="200" max="300">
					</div>
				</div>
				
				<div class="form-group">
					<label for="salida" class="col-sm-2 control-label">Tension de Salida Kw</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="salida" name="salida" placeholder="Tension de Salida Kw" required min="13" max="34">
					</div>
				</div>
				
				<div class="form-group">
					<label for="potencia" class="col-sm-2 control-label">Potencia Instalada Kva</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="potencia" name="potencia" placeholder="Potencia Instalada Kva" required min="10" max="100">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="subestacion.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Crear</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
