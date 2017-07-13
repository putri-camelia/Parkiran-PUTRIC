<?php 
require_once 'View.php'

class UbahTarifUI extends View
{
	public function ubahTarifParkir()
	{
		include_once 'model/KeuanganControl.php';
		$kc = new KeuanganControl();
		$data = $kc->UbahTarif();
		include_once 'pages/formedittarif.php';
		$this->end();
	}
}

 ?>
