<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'About | Smart Sure',
			   'content' => 'About',
			   'description' => 'บริษัท สมาร์ท ชัวร์ จำกัด มุ่งเน้นให้คำปรึกษาและดำเนินธุรกิจเกี่ยวกับบริการหลังการขายอย่างครบวงจรสำหรับผู้ประกอบการด้านรถยนต์โดยเฉพาะ',
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	
	}
	
}