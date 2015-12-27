<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{

		$this->set_validation_index();
		if ( $this->form_validation->run() === false ) {
			echo json_encode(array(
				'status'=>0,
				'data'=>validation_errors()
			));
			$this->load->view( 'test' );
		} else {
			echo "validation successful";
			$this->load->view( 'test' );
		}

	}
	
	private function set_validation_index(){
		$this->form_validation->set_rules( 'test', 'test', 'required|trim|max_length[3]|xss_clean' );
		$this->form_validation->set_error_delimiters( ' ', ' ' );
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */