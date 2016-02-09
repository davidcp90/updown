<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Desafios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->lang->load('auth');
		$this->load->library('grocery_CRUD');
		$this->load->model('Desafios_model');
		$this->load->model('Ion_auth_model');
	}
	public function index()
	{
		$data['posts'] = $this->Desafios_model->get_posts();
		$data['cats'] = $this->Desafios_model->get_categories();
		$data['cta_text']='Publique su desafío';
		$data['cta_url']='desafios/publicar';
		$data['cat_url']='desafios/categoria';
		$data['title'] = 'Desafios - ';
		$this->load->view('estaticos/desafios',$data);
	}
	public function post($id)
	{
		$post = $this->Desafios_model->get_posts($id);
		$categoria = $this->Desafios_model->get_categories($post['categoria']);
		$autor=$this->Ion_auth_model->user($post['autor'])->row();
		$data['related']= $this->Desafios_model->get_posts_by($post['categoria'],$id);
		$data['title'] = $post['nombre'].' - ';
		$data['post'] = $post;
		$data['autor'] = $autor->first_name.' '.$autor->last_name;
		$data['cat_url']='desafios/categoria';
		$data['post_url']='desafios/post';
		$data['categoria']=$categoria;
		$this->load->view('estaticos/2065_detalle',$data);
	}
	public function categoria($id)
	{
		$data['posts'] = $this->Desafios_model->get_posts_by($id);
		$data['cats'] = $this->Desafios_model->get_categories();
		$categoria = $this->Desafios_model->get_categories($id);
		$data['cta_text']='Publique su desafío';
		$data['cta_url']='desafios/publicar';
		$data['cat_url']='desafios/categoria';
		$data['title'] = 'Desafios - '.$categoria['nombre'].' ';
		$data['descripcion']= $categoria['descripcion'];
		$data['post_url']='desafios/post';
		$this->load->view('estaticos/categoria',$data);
	}

	public function _admin_output($output = null,$data)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){
			redirect('auth/login','refresh');
		}
		else{
			$user = $this->ion_auth->user()->row();
			$data['user']=$user;
			$this->load->view('admin/base/header_crud',$output);
			$this->load->view('admin/base/aside',$data);
			$this->load->view('admin/base/adminheader',$data);
			$this->load->view('admin/adminmain',$output);
			$this->load->view('admin/base/footer_crud');
		}
	}

	public function categorias()
	{
		$crud = new grocery_CRUD();
		$data['title']="Categorias Desafios";
		$crud->set_theme('bootstrap');
		$crud->set_table('desafios_categoria');
		$crud->set_subject('Categoria');
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
		$data['title']="Desafios";
		$crud->set_theme('bootstrap');
		$crud->set_table('desafios_post');
		$crud->set_subject('Desafios');
		$crud->required_fields('nombre','categoria','autor','texto');
		$crud->columns('nombre','categoria','autor');
		$crud->unset_fields('fecha');
		$crud->set_relation('categoria','desafios_categoria','nombre');
		$crud->set_relation('autor','users','username');
		$crud->unset_texteditor('texto');
		$crud->unset_export();
		$crud->unset_print();
		$crud->set_field_upload('imagen','assets/uploads/files');
		$output = $crud->render();
		$this->_admin_output($output,$data);

	}


}