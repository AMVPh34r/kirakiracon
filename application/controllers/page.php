<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	
	public function view($page = 'home',$name = null, $func = null) {
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$data = array();
		if (!file_exists('application/views/pages/'.$page.($name ? '/'.$name : '').'.php')) {
			$body = $this->load->view('pages/404', $data, true);
			$this->load->view('page',array('page_title'=>'404','page_body'=>$body));
			return;
		}
		
		$data['page_title'] = ucfirst($page); // Capitalize the first letter
		$data['page_title'] .= ($name ? ': '.ucfirst(str_replace('-',' ',$name)) : '');
		$data['func'] = ($func ? $func : '');
		
		$data['page_body'] = $this->load->view('pages/'.$page.($name ? '/'.$name : ''), $data, true);
		$this->load->view('page',$data);
	}

	public function index() {
		$this->view('home');
	}
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */