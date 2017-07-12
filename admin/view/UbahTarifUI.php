<?php 
require_once 'View.php'

Class UbahTarifUI extends View
{
	public function getDataKeuangan(){
		
	}
	public function ubahTarifParkir(){
		include_once 'controller/KeuanganControl.php';
		$kc = new KeuanganControl();
		$data = $kc->ubahTarifParkir();
		$data_tarif = $data['tarif'];
		$data_kategori = $data['kategori'];
		include_once 'pages/formedittarif.php';
		$this->end();
	}
	public function updateTarif(){

	}
}

 ?>
