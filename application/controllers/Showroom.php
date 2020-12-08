<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showroom extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Showroom | Smart Sure',
			   'content' => 'Showroom'
			);

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	}
	
	public function view($id=null){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Showroom Detail | Smart Sure',
			   'content' => 'Showroom',
			   'id' => $id
          );
	// $template['content'] = $this->load->view('About',$contents,TRUE);
	$this->load->view('template',$template, $contents);
		}
}
?>

