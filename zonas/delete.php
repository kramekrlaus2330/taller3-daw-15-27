
<?php 
if (!empty($_GET)) {
//echo $_GET['id'];
include 'connection.php';	
$cn =  Database::connect();
$cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$query = $cn->prepare("DELETE FROM zonas where id_zona = ?");
$query->execute(array($_GET['id']));
$data = $query->fetch(PDO::FETCH_ASSOC);
header("Location: index.php");
}

?>