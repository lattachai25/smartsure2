<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReadMore extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'J MOOK',
			   'content' => 'ReadMore',
			   'description' => 'Smartsure บริการที่ช่วยให้คุณอุ่นใจเมื่อซื้อรถยนต์มือสอง พร้อมตรวจเช็คสภาพรถครบวงจร',
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	
	}
	
}
