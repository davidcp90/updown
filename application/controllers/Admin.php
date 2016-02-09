<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
	}
	public function index()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){
			redirect('auth/login','refresh');
		}
		else{
			$user = $this->ion_auth->user()->row();
			$data['title']="Dashboard";
			$data['user']=$user;
			$this->load->view('admin/base/header');
			$this->load->view('admin/base/aside',$data);
			$this->load->view('admin/base/adminheader',$data);
			$this->load->view('admin/adminmain');
			$this->load->view('admin/base/footer');
		}

	}
}