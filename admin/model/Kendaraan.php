<?php 
include_once 'Model.php';
class Kendaraan extends Model{
 public $id_bulan;
 public $mobil;
 public $motor;

 public function lihatDataKendaraan()
 {
 	$query = $this->db->prepare("SELECT * FROM kendaraan");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
 }
}
 ?>
