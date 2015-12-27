<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Retailpricing_model extends CI_Model {

	private $cost_of_domain = 10
			,$desired_margin = 525
			,$max_demo_number_length = 5
			,$retail_price = null
			,$demo_price = null;

	public function __construct( $params = array() ){
		parent::__construct();
	}

	public function set_demo_price( $demo_price ){
		$this->demo_price = $demo_price;
	}

	public function get_retail_price(){
		return $this->cost_of_domain + $this->desired_margin + $this->demo_price;
	}

}