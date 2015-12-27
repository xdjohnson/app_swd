<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Websites extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper( 'url' );
		$this->load->library( 'templatemonster' );
	}
	public function index()
	{
		
		# get categories from templatemonster.com
		# categories is an array with 'heading', 'url', and 'category' keys
		$categories = $this->templatemonster->get_categories();

		# load the view
		$this->load->view( 'v_websites', array(
			'drop_down_categories'=>$this->get_drop_down_categories( $categories )
		));

	}
	private function get_drop_down_categories( $categories ){

		$html = '<select id="categories_ddn" class="form-control"><option value="0">Select a category</option>';

		foreach ( $categories as $category => $data ){

			$html .= '<option value="' . $categories[$category]['url'] . '"' . ">$category</option>";
			$this->append_sub_categories( $html, $data );

		}

		$html .= '</select>';

		return $html;

	}
	private function append_sub_categories( &$html, $data ){

		$length = count( $data['sub_headings'] );
		for ( $i = 0; $i < $length; $i++ ){ 
			$html .= '<option value="' . $data['sub_headings'][$i]['url'] . '"' . ">&nbsp;-&nbsp;{$data['sub_headings'][$i]['sub_heading']}</option>";
		}

	}

	public function to_string()
	{
		$categories = $this->templatemonster->get_categories();
		$data = $this->templatemonster->page_to_string();
		echo "<pre>" . $data . "</pre>";
	}

}

/* End of file websites.php */
/* Location: ./application/controllers/websites.php */