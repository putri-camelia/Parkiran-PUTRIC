<?php 

require_once 'View.php';

 class KendaraanUI extends View
 {
 	
 	public function tampilKendaraan()
 	{
 		include_once 'model/Kendaraan.php';
 		$kdr = new Kendaraan();
 		$isi_kendaraan = $kdr->lihatDataKendaraan();
 		include_once 'pages/laporankendaraan.php';
 		$this->end();
 	}
 }

?>
