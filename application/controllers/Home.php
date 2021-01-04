<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
	// 	echo $_SERVER['HTTP_USER_AGENT'];
	// 	echo $this->_bot_detected(); 
	// exit;	
	$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Home | Smart Sure',
			   'content' => 'Home',
			   'description' => 'Smartsure พร้อมดูแลรถของคุณตลอด 24 ชม. ให้คุณอุ่นใจตลอดการเดินทาง',
          );

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);

	}

	public function view($id=null){

		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template=array(
		 'title'   => 'News Show | Smart Sure',
		 'content' => 'Package',
		 'id' => $id
		 );
	   
		$contents['id'] = $id;
		$this->load->view('template',$template);
		}
	

		function _bot_detected() {

			return (
			isset($_SERVER['HTTP_USER_AGENT'])
			&& preg_match('/bot|crawl|slurp|spider|mediapartners/i', $_SERVER['HTTP_USER_AGENT'])
			);
			}
}
