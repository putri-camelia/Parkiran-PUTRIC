<?php 
include_once 'Model.php';
class Tarif extends Model{
 public $id_bulan;
 public $mobil;
 public $motor;

 public function UbahTarif()
 {
 	$query = $this->db->prepare("SELECT * FROM tarif");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
 }
}
 ?>
