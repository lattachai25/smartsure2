<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Claim_service extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Claim_service | Smart Sure',
			   'content' => 'Claim_service',
			   'description' => 'smart sure ผู้ให้บริการช่วยเหลือฉุกเฉินบนท้องถนน ที่ครอบคลุมทุกปัญหา ไม่ว่าจะเป็นบริการรถยก จั๊มพ์แบตเตอรี่ เปลี่ยนยางอะไหล่ ตลอด 24 ชม. โดยทีมงานมืออาชีพที่ได้รับความไว้วางใจจากเต๊นท์รถกว่า 270 แห่งทั่วประเทศ',
			   
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	}
	
	public function view($id=null){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Product Detail | Smart Sure',
			   'content' => 'Claim_service_Detail',
			   'id' => $id
          );
	// $template['content'] = $this->load->view('About',$contents,TRUE);
	$this->load->view('template',$template, $contents);
		}

}