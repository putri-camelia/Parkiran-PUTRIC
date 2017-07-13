<?php 
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'ubahtarif/header.php';
		include_once 'ubahtarif/sidebar.php';
	}

	protected function end()
	{
		include 'ubahtarif/footer.php';
	}
}

?>