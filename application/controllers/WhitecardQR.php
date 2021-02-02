<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WhitecardQR extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'WhitecardQR | Smart Sure',
			   'content' => 'whitecardQR',
			   'description' => 'ผู้เชี่ยวชาญด้านการช่วยเหลือฉุกเฉินบนท้องถนนตลอด 24 ชม. จาก Smartsure',
			);

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('whitecardQR',$template);
	}
	
	public function view($id=null){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'White Card| Smart Sure',
			   'content' => 'White Card',
			   'id' => $id
          );
	// $template['content'] = $this->load->view('About',$contents,TRUE);
	$this->load->view('whitecardQR');
		}
}
?>