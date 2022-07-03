<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Eliminar</title>
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
					<h1>La siguiente informacion sera eliminada. Desea continuar?</h1>
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
	<br>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
			<table class="table table-bordered" >
				<thead >
					<tr>
						<th class="text-center">#ID</th>
						<th class="text-center">Nombre de Zona</th>
						<th class="text-center">Cantidad de mesas</th>
					</tr>
				</thead>
				<tbody>
<?php 
if (!empty($_GET)) {
//echo $_GET['id'];
include 'connection.php';	
$cn =  Database::connect();
$cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$query = $cn->prepare("SELECT * FROM zonas where id_zona = ?");
$query->execute(array($_GET['id']));
$data = $query->fetch(PDO::FETCH_ASSOC);
echo '
	<tr>
		<td class="text-center">'.$data["id_zona"].'</td>
		<td class="text-center">'.$data["zona"].'</td>
		<td class="text-center">'.$data["cantidad_mesas"].'</td>
	</tr>
    <a href="delete.php?id='.$data["id_zona"].'" class="btn btn-danger">Eliminar</a>
';
}
else{
    echo "nada ha venido";
}
?>
				</tbody>
			</table>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
