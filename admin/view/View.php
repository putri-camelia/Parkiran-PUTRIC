<?php 
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/lihatkendaraan/header.php';
		include_once 'template/lihatkendaraan/sidebar.php';
	}

	protected function end()
	{
		include 'template/lihatkendaraan/footer.php';
	}
}

?>