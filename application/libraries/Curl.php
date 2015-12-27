<?php  if ( ! defined('BASEPATH')) exit('What?');

class Curl {

	private $url;


	public function __construct( $params = null ){
		if ( ! is_null( $params ) ){
			$this->url = $params['url'];
		}
	}

	public function get_page_auto( $options = array() ){
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_USERAGENT		=> $this->get_user_agent( $options )
			,CURLOPT_FOLLOWLOCATION => $this->get_follow_location( $options )
			,CURLOPT_HEADER			=> $this->get_header( $options )
			,CURLOPT_RETURNTRANSFER	=> $this->get_return_transfer( $options )
			,CURLOPT_URL			=> $this->get_url( $options )
		));

		$page = curl_exec( $ch );

		curl_close( $ch );

		return $page;
	}

	public function getPage( $options = array() ){
		$ch = curl_init();

		curl_setopt_array( $ch, $options );

		$page = curl_exec( $ch );
		
		curl_close( $ch );

		return $page;
	}
	public function getPages( $options = array() ){
		$ua = array( 'Mozilla', 'Opera', 'Microsoft Internet Explorer', 'ia_archiver' );
		$op = array( 'Windows', 'Windows XP', 'Linux', 'Windows NT', 'Windows 2000', 'OSX' );
		$agent  = $ua[rand(0,3)].'/'.rand(1,8).'.'.rand(0,9).' ('.$op[rand(0,5)].' '.rand(1,7).'.'.rand(0,9).'; en-US;)';

		// loop through the urls to run, setting options as you go along
		$multiHandle = curl_multi_init();
		$index = 0;
		$numOfProxies = count( $options['proxies'] );
		log_message( 'error', 'curl set_opt start: ' . date( 'h:i' ) );
		foreach( $options['urls'] as $name => $value ){
		// for ( $i = 0; $i < count( $options['urls'] ); $i++ ){
			$modValue = ( $numOfProxies === 0 ) ? 0 : $index % $numOfProxies;
			$curlHandle[$name] = curl_init();

			curl_setopt( $curlHandle[$name], CURLOPT_TIMEOUT, 120 );
			if ( ! empty( $options['proxies'] ) ){
					log_message( 'error', 'proxies are being used' );
				curl_setopt( $curlHandle[$name], CURLOPT_PROXY, $options['proxies'][$modValue] );
			}else{
				log_message( 'error', 'proxies NOT being used' );
			}
			curl_setopt( $curlHandle[$name], CURLOPT_USERAGENT, $this->get_user_agent() );
			curl_setopt( $curlHandle[$name], CURLOPT_FOLLOWLOCATION, 1 );
			curl_setopt( $curlHandle[$name], CURLOPT_HEADER, FALSE );
			curl_setopt( $curlHandle[$name], CURLOPT_RETURNTRANSFER, TRUE );
			curl_setopt( $curlHandle[$name], CURLOPT_URL, $options['urls'][$name] );
			curl_multi_add_handle( $multiHandle, $curlHandle[$name] );

			$index++;
		}
		log_message( 'error', 'curl set_opt end: ' . date( 'h:i:s' ) );

		// execute the urlsToRun
		log_message( 'error', 'curl start: ' . date( 'h:i:s' ) );
		do{
			curl_multi_exec( $multiHandle, $status );
			// stop for 1 second to reduce the load on cpu
			sleep( 1 );
		}
		while( $status > 0 );
		log_message( 'error', 'curl end: ' . date( 'h:i:s' ) );


		foreach( $options['urls'] as $name => $value ){
		// for ( $j = 0; $j < count( $curlHandle ); $j++ ){
			$pages[$name] = curl_multi_getcontent( $curlHandle[$name] );
		}

		return $pages;
	}
	private function get_user_agent( $options ){

		if ( isset( $options['curlopt_useragent'] ) ){
			return $options['curlopt_useragent'];
		}

		$user_agents = array(
			'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1667.0 Safari/537.36'
			,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1664.3 Safari/537.36'
			,'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36'
			,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13'
			,'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.26 Safari/537.11'
			,'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0'
			,'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0'
			,'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0'
			,'Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0'
			,'Mozilla/5.0 (X11; Linux x86_64; rv:28.0) Gecko/20100101 Firefox/28.0'
			,'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14'
			,'Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02'
			,'Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00'
			,'Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00'
			,'Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00'
		);
		/* old version
		$ua = array( 'Mozilla', 'Opera', 'Microsoft Internet Explorer', 'ia_archiver');
		$op = array( 'Windows', 'Windows XP', 'Linux', 'Windows NT',  'Windows 2000', 'OSX');
		$agent  = $ua[rand(0,3)].'/'.rand(1,8).'.'.rand(0,9).' ('.$op[rand(0,5)].' '.rand(1,7).'.'.rand(0,9).'; en-US;)';
		*/

		$num_of_user_agents = count( $user_agents );
		$num_of_user_agents--;
		$rand_num = rand( 0, $num_of_user_agents );
		$agent = $user_agents[$rand_num];
		log_message( 'info', 'user agent is: ' . $agent );

		return $agent;
	}
	private function get_follow_location( $options ){

		if ( isset( $options['curlopt_followlocation'] ) ){
			return $options['curlopt_followlocation'];
		}

		return 1;

	}
	private function get_header( $options ){

		if ( isset( $options['curlopt_header'] ) ){
			return $options['curlopt_header'];
		}

		return false;

	}
	private function get_return_transfer( $options ){

		if ( isset( $options['curlopt_return_transfer'] ) ){
			return $options['curlopt_return_transfer'];
		}

		return true;

	}
	private function get_url( $options ){

		if ( isset( $options['curlopt_url'] ) ){
			return $options['curlopt_url'];
		}

		return $this->url;

	}
}