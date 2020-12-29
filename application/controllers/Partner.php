<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Partner | Smart Sure',
			   'content' => 'Partner',
			   'description' => 'Smartsure ผู้ให้บริการช่วยเหลือฉุกเฉินบนท้องถนน 24 ชม. ที่เต๊นท์รถกว่า 270 แห่งไว้วางใจ',
			   
			);

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	}
	
	public function view($id=null){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Partner Detail | Smart Sure',
			   'content' => 'Partner',
			   'id' => $id
          );
	// $template['content'] = $this->load->view('About',$contents,TRUE);
	$this->load->view('template',$template, $contents);
		}
}
?>

