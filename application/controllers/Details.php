<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Product Detail | Smart Sure',
			   'content' => 'Details',
			   'description' => 'ผู้ให้คำปรึกษาและคัดสรรบริการหลากหลายรูปแบบ ไม่ว่าจะเป็นการรับประกันอะไหล่รถยนต์ การช่วยเหลือฉุกเฉินบนท้องถนนตลอด 24 ชม. และการจัดการด้านการเคลม เพื่อให้ตรงตามความต้องการของลูกค้ามากที่สุด จึงทำให้ Smartsure เป็นหนึ่งในบริการหลังการขายสำหรับรถยนต์มือสองที่ครบวงจรและใหญ่ที่สุดในอาเซียน '
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	
	}

	public function view($id=null){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Product Detail | Smart Sure',
			   'content' => 'Details',
			   'id' => $id
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$contents['id'] = $id;
		$this->load->view('template',$template, $contents);
	
	}

}