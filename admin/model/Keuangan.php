<?php 
include_once 'Model.php';
class Keuangan extends Model{
 public $id_keuangan;
 public $id_kategori;

 public function lihatDataKeuangan()
 {
 	$query = $this->db->prepare("SELECT * FROM keuangan");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
 }
 public function setKeuangan($id_kategori)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO berita(id_kategori) VALUES(:id_kategori)");
		   $stmt->bindparam(":id_kategori",$id_kategori);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
 public function getDataKeuangan($id)
	{
		try 
		{
			$stmt = $this->db->prepare("SELECT * FROM keuangan WHERE id_keuangan=:id");
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		}
		catch(PDOException $e) 
		{
			echo $e->getMessage(); 
			return false;
		}
	}
}
 ?>
