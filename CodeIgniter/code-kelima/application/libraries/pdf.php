<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;

class Pdf extends Dompdf{
	public $filename;
	public function __construct()
	{
		parent::__construct();
		$this->filename = "laporan.pdf";
	}

	protected function ci(){
		return get_instance();
	}

	public function load_view($view, $data = array()){
		$html = $this->ci()->load->view($view, $data, true);
		$this->load_html($html);

		$this->render();
			$this->stream($this->filename, array("Attachment" => false));
			exit;
	}
}

/* End of file Pdf.php */

?>
