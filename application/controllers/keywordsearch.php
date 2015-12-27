<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keywordsearch extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library( 'form_validation' );
	}
	public function index()
	{

		# pre-validation of user input
		preg_match( "/[^\d a-zA-Z\/\-]+/", $this->input->post( 'keywordsearch' ), $matches );
		if ( count( $matches ) > 0 ){
			# pre-validation failed
			echo json_encode(array(
				'status'=>0,
				'data'=>'keyword failed pre-validation'
			));

			exit;
		}

		$this->set_validation_index();

		if ( $this->form_validation->run() === false ) {

			# validation failed

			echo json_encode(array(
				'status'=>0,
				'data'=>validation_errors()
			));

		} else {

			# validation succeeded

			# load template monster class
			$this->load->library( 'templatemonster' );

			# get the image tags from the page
			$image_tags_data = $this->templatemonster->get_image_tags_keyword_search();

			# image_tags_data will be -1, if no results were found for the keyword search
			
			# return the image tags to the client in this form
			# $image_tags_data['srcs'][], and $image_tags_data['responsives'][]
			echo json_encode(array(
				'status'=>1,
				'data'=>$image_tags_data
			));

		}
		
	}


	private function set_validation_index(){
		$this->form_validation->set_rules( 'keywordsearch', '', 'required|trim|xss_clean' );
	}
}

/* End of file keywordsearch.php */
/* Location: ./application/controllers/keywordsearch.php */