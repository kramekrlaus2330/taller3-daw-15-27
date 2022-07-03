<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Zonas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="../css/icomoon/style.css">
</head>
<body>

	<br>
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-offset-2 col-md-8">
					<h1>Zonas:</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-offset-2 col-md-8">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<a href="create.php" class="btn btn-primary">Crear Nueva Zona</a>	
					
				</div>
			</div>				
		</div>
	</div>
	<br>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
			<table class="table table-bordered">
				<thead >
					<tr>
						<th class="text-center">#ID</th>
						<th class="text-center">Nombre de la Zona</th>
						<th class="text-center">Cantidad de Mesas</th>
						
					</tr>
				</thead>
				<tbody>
					
					<?php 
					
						include 'connection.php';
						$pdocn = Database::connect();
						$sql = ('SELECT * FROM zonas ORDER BY id_zona ASC');
						foreach ($pdocn->query($sql) as $row) {
						echo 	'<tr>
									<td class="text-center">'.$row["id_zona"].'</td>
									<td class="text-center">'.$row["zona"].'</td>
									<td class="text-center">'.$row["cantidad_mesas"].'</td>
									<td class="text-center">
										<a href="read.php?id='.$row["id_zona"].'" class="btn btn-default">Obtener</a>											
										<a href="update.php?id='.$row["id_zona"].'" class="btn btn-success">Modificar</a>
										<a href="confirmacion.php?id='.$row["id_zona"].'" class="btn btn-danger">Eliminar</a>										
									</td>
								</tr>';
						}
					 ?>						
				</tbody>
			</table>		
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>
