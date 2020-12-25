<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smart_tpa extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'smart_tpa | Smart Sure',
			   'content' => 'smart_tpa',
			   
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	}
	
	public function view($id=null){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Product Detail | Smart Sure',
			   'content' => 'smart_tpa_detail',
			   'id' => $id
          );
	// $template['content'] = $this->load->view('About',$contents,TRUE);

	$this->load->view('template',$template, $contents);
		}
}