<?php

class Manejador extends CI_Controller {
	
	function index()
	{
		$this->load->helper('file');
		//echo realpath('./archivos');
		$dir = "./archivos/";
		$archivos = array();
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					$tipo = (is_dir($dir . $file)) ? "carpeta" : "archivo";
					$archivos[] = array("nombre" => $file, "tipo" => $tipo);
				}
				closedir($dh);
			}
		}
		//var_dump($archivos);
		sort($archivos);
		array_shift($archivos);
		array_shift($archivos);
		$data['archivos'] = $archivos;
		$this->load->view('manejador', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */