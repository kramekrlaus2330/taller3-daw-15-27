<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Actualizar información de la Zona</title>
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
					<h1>Actualizar datos de la Zona</h1>
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
        <div class="col-md-offset-2 col-md-8">
        <form action="update.php" method="POST">
<?php 
$id=null;
if (!empty($_GET)) {
$id=$_GET['id'];
include 'connection.php';
$cn =  Database::connect();
$cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$query = $cn->prepare("SELECT * FROM zonas where id_zona = ?");
$query->execute(array($_GET['id']));
$data = $query->fetch(PDO::FETCH_ASSOC);	
echo '
	<div>
		<label for="-">Id de la zona</label>
		<input type="text" value="'.$data["id_zona"].'" class="cod" readonly="readonly" name="id_usuario">
	</div>
	<div>
		<label for="">Nombre de la Zona</label>
		<input type="text" value="'.$data["zona"].'" placeholder="Nombre de Zona" name="zona">
	</div>
	<div>
		<label for="-">Cantidad de zona</label>
		<input type="text" value="'.$data["cantidad_mesas"].'" placeholder="Numero de mesas"  name="cantidad_mesas">
	</div>

';
Database::disconnect();
}	
?>
		<div>
			<input type="submit" class="btn btn-success" value="Actualizar">
		</div>
	    </form>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>
<?php 
if (!empty($_POST)) {
	include 'connection.php';
	$id = trim($_POST['id_usuario']);
	$nombre = trim($_POST['zona']);
	$mesas = trim($_POST['cantidad_mesas']);

	$cnu = Database::connect();
	$cnu->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = $cnu->prepare("UPDATE zonas SET zona = ?, cantidad_mesas = ? WHERE id_zona = ?");
	$query->execute(array($nombre, $mesas, $id));
	Database::disconnect();
	header("Location: index.php");
}
?>
