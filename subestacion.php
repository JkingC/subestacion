<?php
	require 'conectar.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE Nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM Subestaciones $where";
	$resultado = $mysqli->query($sql);
	
?>
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
				<h2 style="text-align:center">Subestaciones</h2>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nueva Subestacion</a>
			</div>

			<div ALIGN=right>	
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th ALIGN=center>ID</th>
							<th ALIGN=center>Nombre</th>
							<th ALIGN=center>Ubicacion Geografica</th>
							<th ALIGN=center>Tension de Entrada</th>
							<th ALIGN=center>Tension de Salida</th>
							<th ALIGN=center>Potencia Instalada</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td ALIGN=center><?php echo $row['Id']; ?></td>
								<td ALIGN=center><?php echo $row['Nombre']; ?></td>
								<td ALIGN=center><?php echo $row['Ubicacion']; ?></td>
								<td ALIGN=center><?php echo $row['Entrada']; ?></td>
								<td ALIGN=center><?php echo $row['Salida']; ?></td>
								<td ALIGN=center><?php echo $row['Potencia']; ?></td>
								<td ALIGN=center><a href="vistamodificar.php?id=<?php echo $row['Id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td ALIGN=center><a href="eliminar.php?id=<?php echo $row['Id']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		<div class="row">
				<a href="Index.php" class="btn btn-primary">Regresar al Menu</a>
			</div>
		</div>
		
		
	</body>
</html>	
