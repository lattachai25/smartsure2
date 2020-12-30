<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OricoRsa extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Orico RSA | Smart Sure',
			   'content' => 'Orico RSA',
			   'description' => 'Smartsure บริการตรวจสภาพรถมือสองพร้อมบริการช่วยเหลือฉุกเฉิน 24 ชม.',
			   
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	}
	
	public function view($id=null){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Product Detail | Smart Sure',
			   'content' => 'Orico_rsa_Detail',
			   'id' => $id
          );
	// $template['content'] = $this->load->view('About',$contents,TRUE);
	$this->load->view('template',$template, $contents);
		}

	
}