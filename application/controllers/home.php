<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view( 'v_home_v2' );
	}
	public function swd_test(){
		phpinfo();
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */