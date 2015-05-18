<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DosMil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
        $this->load->library('ion_auth');
        $this->lang->load('auth');
		$this->load->library('grocery_CRUD');
	}

	public function _admin_output($output = null,$data)
	{
		        $this->load->view('admin/base/header_crud',$output);
        $this->load->view('admin/base/aside');
        $this->load->view('admin/base/adminheader',$data);
		$this->load->view('admin/adminmain',$output);
        $this->load->view('admin/base/footer_crud');
	}


	public function categorias()
	{
			$crud = new grocery_CRUD();
            $data['title']="Categorias 2065";
			$crud->set_theme('bootstrap');
			$crud->set_table('dosmil_categoria');
			$crud->set_subject('Categoria 2065');
			$crud->required_fields('nombre','imagen','descripcion');
			$crud->columns('nombre','imagen','descripcion');
            $crud->unset_texteditor('descripcion');
            $crud->unset_export();
		  $crud->unset_print();
            $crud->set_field_upload('imagen','assets/uploads/files');
			$output = $crud->render();

			$this->_admin_output($output,$data);

	}
    public function posts()
	{
			$crud = new grocery_CRUD();
            $data['title']="Posts 2065";
			$crud->set_theme('bootstrap');
			$crud->set_table('dosmil_post');
			$crud->set_subject('Post 2065');
			$crud->required_fields('nombre','categoria','autor','texto');
			$crud->columns('nombre','categoria','autor');
            $crud->unset_texteditor('descripcion');
            $crud->unset_fields('fecha');
            $crud->set_relation('categoria','dosmil_categoria','nombre');
            $crud->set_relation('autor','users','username');
            $crud->unset_export();
		      $crud->unset_print();
            $crud->set_field_upload('imagen','assets/uploads/files');
			$output = $crud->render();

			$this->_admin_output($output,$data);

	}


}