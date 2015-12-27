<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends CI_Controller {

	# new 14MAY2015
	// private $cost_of_domain = 10,
	// 		$desired_margin = 475,
	// 		$max_demo_number_length = 5;

	private $max_demo_number_length = 5;

	public function __construct(){
		parent::__construct();
	}
	public function index( $code ){
		# get variables for index page
		$variables = $this->get_index_page_variables( $code );
		# load view
		$this->load->view( 'v_demo', $variables );
	}
	# new 14MAY2015
	private function _get_data_from_code( $code ){
		$arr[0] = substr( $code, 0, 1 ); // $num_digits_of_price is collected in key 0
		$arr[1] = substr( $code, 1, $arr[0] ); // $price is collected in key 1
		$arr[2] = substr( $code, 1 + $arr[0] ); // $demo_number is collected in key 2

		return $arr;
	}
	# new 14MAY2015
	private function _demo_number_is_proper_length( $demo_number = 0 ){

		if( strlen( $demo_number ) <= $this->max_demo_number_length ){
			return true;
		} else {
			return false;
		}
	}
	private function get_index_page_variables( $code ){
		# new 14MAY2015 - split the code up into its respective parts
		list( $num_digits_of_price, $cost_of_demo, $demo_number ) = $this->_get_data_from_code( $code );
		# new 14MAY2015 - if demo number is not the proper length, then redirect users to websites controller
		if ( ! $this->_demo_number_is_proper_length( $demo_number ) ){
			redirect('websites');
		}
		$this->load->helper( 'url' );
		$this->load->model( 'retailpricing_model', 'rpm' );
		$this->rpm->set_demo_price( $cost_of_demo );
		$this->load->library( 'templatemonster' );
		# new 14MAY2015
		// $retail_price = $this->cost_of_domain + $cost_of_demo + $this->desired_margin;
		$iframe_src = $this->templatemonster->get_iframe_src( $demo_number );

		return array(
			'iframe_src'=>$iframe_src
			,'demo_number'=>$demo_number
			,'retail_price'=>$this->rpm->get_retail_price()
		);
	}
}

/* End of file demo.php */
/* Location: ./application/controllers/demo.php */