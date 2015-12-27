<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webmessage extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library( 'form_validation' );
	}
	public function index(){
		$this->set_validation_index();

		if ( $this->form_validation->run() === false ) {

			# validation failed

			echo json_encode(array(
				'status'=>0,
				'data'=>validation_errors()
			));

		} else {

			# validation succeeded

			# send the email
			if ( $this->send_email() ){
				# sending email is successful

				$this->email->clear();

				$ret_val = array(
					'status'=>1
					,'data'=>'Email sent.'
				);
			} else {
				# sending email is unsuccessful

				$this->email->clear();

				$ret_val = array(
					'status'=>0
					,'data'=>'Email could not be sent.  Contact website creator.'
				);
			}

			# send a message to the client
			echo json_encode( $ret_val );
		}
	}
	

	private function send_email(){
		# load mail service class
		$this->load->library( 'email' );

		# prepare email
		$this->email->from( $this->input->post( 'contact_email' ), $this->input->post( 'contact_name' )  );
		$this->email->to( 'plan2wealth@gmail.com' );
		$this->email->subject( 'Message From User at Safe Web Design Website' );
		$this->email->message( $this->input->post( 'contact_message' ) );

		log_message( 'info', "Here are the details of the email: \r\n" . "From: {$this->input->post( 'contact_name' )}<{$this->input->post( 'contact_email' )}>\r\n" . "Message: {$this->input->post( 'contact_message' )}" );

		# send email and return the results
		return $this->email->send();
	}
	private function set_validation_index(){
		$this->form_validation->set_rules( 'contact_name', 'Contact name', 'required|trim|max_length[75]|xss_clean' );
		$this->form_validation->set_rules( 'contact_email', 'Email address', 'required|trim|max_length[75]|xss_clean' );
		$this->form_validation->set_rules( 'contact_message', 'Your comments', 'required|trim|max_length[2048]|xss_clean' );
		$this->form_validation->set_error_delimiters( ' ', ' ' );
	}

}

/* End of file webmessage.php */
/* Location: ./application/controllers/webmessage.php */