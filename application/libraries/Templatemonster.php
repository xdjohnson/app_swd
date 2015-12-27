<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templatemonster {

	/*
		WARNING: THIS CLASS HAS THE FOLLOWING DEPENDENCIES:
		- retailpricing_model
		- curl library
	*/

	# PRIVATE VARIABLES
	private
		$categories_url = "http://www.templatemonster.com/category"
		,$category_url = "http://www.templatemonster.com/"
		,$search_url = "http://www.templatemonster.com/templates.php"
		,$demo_url = "http://www.templatemonster.com/demo/"
		,$CI
		,$templates_we_offer = array(
			'Bootstrap',
			'Drupal',
			'HTML5 JS Animated',
			'HTML5 Website',
			'JavaScript Based',
			'Jigoshop',
			'Joomla',
			'JS Animated Template',
			'Magento',
			'OpenCart',
			'OsCommerce',
			'PrestaShop',
			'Responsive JavaScript Animated',
			'Stretched CSS Template',
			'Stretched Website',
			'Turnkey Website',
			'VirtueMart',
			'Website',
			'WooCommerce',
			'WordPress',
			'Zen Cart'
		),
		$templates_we_reject = array(
			'Wix'
		),
		$length,
		$web_page;

	# CONSTRUCTOR
	public function __construct(){
		$this->CI = &get_instance();
		$this->CI->load->model( 'retailpricing_model', 'rpm' );
	}

	# PUBLIC FUNCTIONS
	public function get_categories(){

		$params = array( 'url'=>$this->categories_url );
		$this->CI->load->library( 'curl', $params );
		$page = $this->CI->curl->get_page_auto();

		# extract the categories data from the page
		$categories = $this->_get_categories( $page );

		return $categories;
	}
	public function get_image_tags_category_search(){

		$params = $this->get_url_category_search();

		$this->CI->load->library( 'curl', $params );

		$page = $this->CI->curl->get_page_auto();

		# extract the images from the page
		$images = $this->_get_image_tags( $page );

		return $images;
	}
	public function get_image_tags_keyword_search(){

		$params = $this->get_url_keyword_search();

		$this->CI->load->library( 'curl', $params );

		$page = $this->CI->curl->get_page_auto();

		# extract the images from the page
		$images = $this->_get_image_tags( $page );

		return $images;
	}
	public function get_iframe_src( $demo_number ){
		$params = array( 'url'=>$this->demo_url . $demo_number . '.html' );
		$this->CI->load->library( 'curl', $params );
		$page = $this->CI->curl->get_page_auto();
		preg_match( '/id="frame"[^>]+src="([^"]+)"/si', $page, $iframe_src );

		return ( isset( $iframe_src[1] ) ) ? $iframe_src[1] : '';
	}

	# PRIVATE FUNCTIONS
	private function get_url_category_search(){

		if ( $this->CI->input->post( 'page' ) ){
			$url = $this->category_url . $this->CI->input->post( 'categorysearch' ) . "?page=" . $this->CI->input->post( 'page' );

			return array( 'url'=>$url );
		}

		$url = $this->category_url . $this->CI->input->post( 'categorysearch' );

		return array( 'url'=>$url );
	}
	private function get_url_keyword_search(){

		if ( $this->CI->input->post( 'page' ) ){
			$url = $this->search_url . "?page=" . $this->CI->input->post( 'page' ) . "&keywords=" . str_ireplace( ' ', '+', $this->CI->input->post( 'keywordsearch' ) );

			return array( 'url'=>$url );
		}

		$url = $this->search_url . "?keywords=" . str_ireplace( ' ', '+', $this->CI->input->post( 'keywordsearch' ) );
		
		return array( 'url'=>$url );
	}
	private function _get_image_tags( $page ){

#log_message( 'info', $page );

		# return an empty array(), if templatemonster is unable to find results
		preg_match( "/We were unable to find results/i", $page, $results );
		if ( isset( $results[0] ) ){
			# No results were found

			return -1;
		}

		#grab the section that has the images we're interested in
		preg_match( "/search-listing.*?<script/s", $page, $sections );
		if ( ! isset( $sections[0] ) ){
			log_message( 'error', 'no image tags were found on the page' );
			log_message( 'info', $page );

			return array();
		}

		# parse out all the list items that contain the websites you offer
		preg_match_all( "/<li[^>]+>.*?<\/li>/is", $sections[0], $pre_list_items );
		$list_items_we_offer = $this->get_list_items_we_offer( $pre_list_items[0] );

		# now let's parse out all the list-itme tags that contain 1) the image and 2) responsive status
		// preg_match_all( "/<li[^>]+>.*?<img[^>]+>/s", $list_items_we_offer, $list_items );

		# let's go through each list item, collecting images and responsive statuses along the way
		foreach ( $list_items_we_offer as $li ){
			$images['responsives'][] = $this->_responsive( $li );  // 1, if true; 0, if false
			$images['demos'][] = $this->_demos( $li ); // 1, if true; 0, if false
			$images['srcs'][] = $this->_src( $li );  // actual image's src
			$images['alts'][] = $this->_alt( $li );  // actual image's alt
			$images['hrefs'][] = $this->_href( $li );  // actual anchor's href value
			$images['tid'][] = $this->_tid( $li );  // tid number
			$images['price'][] = $this->_price( $li );  // price of template
			$images['retail_price'][] = $this->_retail_price( $li );
		}

		# false, if total image count could not be found on the page
		# otherwise, this method returns the total number of images for the category chosen
		$images['image_count'] = $this->get_image_count( $page );

		return $images;
	}
	private function _responsive( $li ){
		
		if ( stripos( $li, 'responsive' ) === false ){
			return 0;
		}

		return 1;
	}
	private function get_image_count( $page ){
		
		preg_match( "/search-heading-block.*?<span[^>]+>([^<]+)</s", $page, $page_counts );

		return str_replace( array( '(', ')' ), '', $page_counts[1] );
	}
	private function _src( $li ){
		preg_match( "/<li[^>]+>.*?<img[^>]+>/s", $li, $section );
		preg_match( "/src=\"([^\"]+)\?/s", $section[0], $urls );

		if ( stripos( $urls[1], 'ajax' ) === false ){
			# url does not contain the word 'ajax', so it's what we want
			return $urls[1];
		}

		# we need to extract the url from the 'data-original' attribute
		# because the url attribute contains the word "ajax", which means
		# that it is of no value to us
		preg_match( "/data-original=\"([^\"]+)\"/s", $li, $data_originals );
		return $data_originals[1];
	}
	private function _href( $li ){
		preg_match( "/<li[^>]+>.*?<img[^>]+>/s", $li, $section );
		preg_match( "/<a.*?href=\"([^\"]+)/s", $section[0], $hrefs );
		return $hrefs[1];
	}
	private function _alt( $li ){
		preg_match( "/<li[^>]+>.*?<img[^>]+>/s", $li, $section );
		preg_match( "/alt=\"([^\"]+)\"/s", $section[0], $alts );
		return $alts[1];
	}
	private function _demos( $li ){
		preg_match( '/js-live-buttons.*?<\/div>/is', $li, $section );

		if ( ! isset( $section[0] ) ){
			log_message( 'error', 'libraries/Templatemonster.php - line ' . __LINE__ . ' - $section[0] was not set' );
			log_message( 'info', '$li is this: ' . $li );
			return 0;
		}

		preg_match_all( '/demo/is', $section[0], $demo_string );
		if ( count( $demo_string[0] ) > 0 ){
			return 1;
		}

		return 0;
	}
	private function _tid( $li ){
		preg_match( '/^.*?data\-tid="([^"]+)"/is', $li, $id );

		if ( ! isset( $id[1] ) ) {
			log_message( 'error', 'libraries/Templatemonster.php - line ' . __LINE__ . "tid was not found.  Here is the string that was searched: $li" );
			return '';
		}

		return $id[1];
	}
	private function _price( $li ){
		preg_match( '/^.*?data\-price="([^"]+)"/is', $li, $price );

		if ( ! isset( $price[1] ) ) {
			log_message( 'error', 'libraries/Templatemonster.php - line ' . __LINE__ . "price was not found.  Here is the string that was searched: $li" );
			return '';
		}

		return $price[1];
	}
	private function _retail_price( $li ){
		preg_match( '/^.*?data\-price="([^"]+)"/is', $li, $price );

		if ( ! isset( $price[1] ) ) {
			log_message( 'error', 'libraries/Templatemonster.php - line ' . __LINE__ . "price was not found.  Here is the string that was searched: $li" );
			return '';
		}

		$this->CI->rpm->set_demo_price( $price[1] );

		return $this->CI->rpm->get_retail_price();
	}

	private function get_list_items_we_offer( $pre_list_items ){
		$pre_return_values = $ret_values = array();

		foreach ( $pre_list_items as $item ){
			if ( $this->_we_offer_this_item( $item ) ){
				$pre_return_values[] = $item;
			}
		}

		// foreach ( $pre_return_values as $val ){
		// 	preg_match( "/<li[^>]+>.*?<img[^>]+>/s", $val, $list_items );
		// 	$ret_values[] = $list_items[0];
		// }

		return $pre_return_values;
	}
	private function _we_offer_this_item( $haystack ){
		$pass_1 = false;
		$pass_2 = true;

		# $pass_1 is set to true, if $needle is a template we offer
		foreach ( $this->templates_we_offer as $needle ){
			if ( stripos( $haystack, $needle ) !== false ){
				$pass_1 = true;
				break;
			}
		}

		# $pass_2 is set to false, if $needle is a template we reject
		foreach ( $this->templates_we_reject as $needle ){
			if ( stripos( $haystack, $needle ) !== false ){
				$pass_2 = false;
				break;
			}
		}

		if ( ( $pass_1 === true ) && ( $pass_2 === true ) ){
			return true;
		}

		return false;
	}
	public function get_keyword_search_results( $keyword ){
	}
	public function get_category_search_results( $category ){
	}
	public function categories_url(){
		return $this->categories_url;
	}
	public function search_url( $keywords ){
		$url_keywords = str_replace( ' ', '+', $keywords );
	}
	private function _get_categories( $page ){

		# find matches to expected pattern
		preg_match_all( "/category\/([^\/\"]+)\//is", $page, $matches );
		$this->length = count( $matches[0] );
		if ( $this->length == 0 ){
			log_message( 'error', "the page retreived from templatemonster does not contain categories to extract" );
			log_message( 'info', $page );

			return array();
		}

		# remove duplicate elements in both arrays
		$array_of_data = $this->_remove_duplicate_elements( $matches );

		# clear up memory
		unset( $matches );
		$matches = null;
		
		# alphabetize the elements in $array_of_data
		asort( $array_of_data );

		# replace dashes with spaces & capitalize each word in each element in $array_of_data
		foreach ( $array_of_data as $k => $v )
		{
			$array_of_data[$k] = str_replace( '-', ' ', $v );
			$array_of_data[$k] = ucwords( $array_of_data[$k] );
		}

		return $array_of_data;
	}
	private function get_sub_headings( $sub_heading_data ){
		$length = count( $sub_heading_data[1] );
		for ( $i = 0; $i < $length; $i++ ){
			$retVal[] = array( 'url'=>html_entity_decode(trim($sub_heading_data[1][$i])), 'sub_heading'=>html_entity_decode(trim($sub_heading_data[2][$i])) );
		}

		return $retVal;
	}
	private function _remove_duplicate_elements( &$matches )
	{
		$retVal = null;

		while ( $this->length-- )
		{
			$retVal[ $matches[0][$this->length] ] = $matches[1][$this->length];
		}

		return $retVal;
	}

}