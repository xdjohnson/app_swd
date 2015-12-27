<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		die('hi');
	}
	public function laugh()
	{
		# gets the name of the thumbnail view to load: 'iPad', or 'standard'
		$page_variables['thumbnail_view'] = $this->get_thumbnail_view();
		

		$this->load->view( 'v_blog_bad', $page_variables );
	}

	# HELPER FUNCTIONS
	private function get_thumbnail_view(){
		# if 'iPad' is in the $_SERVER['HTTP_USER_AGENT']?
		$isiPad = ( bool ) stripos( $_SERVER['HTTP_USER_AGENT'], 'iPad' );

		/* facade: */ // return 'standard';
		return ( $isiPad ) ? 'iPad' : 'standard';
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */