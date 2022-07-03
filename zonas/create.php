<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Ingresar nueva zona</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />	
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
					<h1>Crear un nueva zona</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-offset-2 col-md-8">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<a href="index.php" class="btn btn-default">Retroceder</a>	
				</div>
			</div>				
		</div>
	</div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
		<form action="create.php" method="POST">
		<div class="form-group">
		        <label for="-">Nombre de la Zona</label>
                <input type="text" class="form-control" placeholder="Nombre" name="zona" id="zona" />
            </div>
            <div class="form-group">
		        <label for="-">Cantidad de mesas</label>
                <input type="number" class="form-control" placeholder="Numero de mesas" name="cantidad_mesas" id="cantidad_mesas" />
            </div>


            <button type="submit" class="btn btn-success">Enviar</button>
		</form>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>
<?php 
include 'connection.php';
if (!empty($_POST)) {
	$nombre = trim($_POST['zona']);
	$mesas = trim($_POST['cantidad_mesas']);
	$cn = Database::connect();
	$cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = $cn->prepare("INSERT INTO zonas(zona, cantidad_mesas) VALUES(?, ?)");
	$query->execute(array($nombre, $mesas));
	Database::disconnect();
}	
?>
