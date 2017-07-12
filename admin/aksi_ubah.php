<?php 
$tarif = $_POST ['Tarif'];
$jenis = $_POST ['Jenis']
$id_tarif = $_GET ['id'];

$host = 'localhost';
$dbname = 'sisfonews';
$username = 'root';
$password = 'irfan110697';
$db = '';
try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}
try {
	$stmt = $db->prepare("UPDATE tarif SET jenis=:jenis,tarif=:tarif WHERE id_tarif=:id");
	$stmt->bindparam(":jenis",$jenis);
	$stmt->bindparam(":tarif",$tarif);
	$stmt->bindparam(":id",$id_tarif);
	$stmt->execute();
	echo "Tarif Telah Terupdate!";
}
catch(PDOException $e) {
	echo $e->getMessage();
}
?>