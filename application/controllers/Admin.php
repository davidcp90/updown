<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
        $this->load->view('admin/base/header');
        $this->load->view('admin/base/aside');
		$this->load->view('admin/adminmain');
        $this->load->view('admin/base/footer');
	}
}
