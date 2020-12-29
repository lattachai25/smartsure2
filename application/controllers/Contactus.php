<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Contact Us | Smart Sure',
			   'content' => 'Contactus',
			   'description' => 'ผู้ให้บริการด้านประกันภัยรถยนต์ที่คัดสรรประกันภัยที่คุ้มค่า เหมาะสม และตรงตามความต้องการของคุณมากที่สุด พร้อมบริการช่วยเหลือฉุกเฉินบนท้องถนนตลอด 24 ชม. บริการด้วยมาตรฐานระดับสากล ให้คุณมั่นใจและขับขี่รถได้อย่างอุ่นใจ',
			   
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	
	}
	
}