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
		$this->load->model('Dosmil_model');
		$this->load->model('Ion_auth_model');
	}
	public function index()
	{
		$data['posts'] = $this->Dosmil_model->get_posts();
		$data['cats'] = $this->Dosmil_model->get_categories();
		$data['title'] = 'El 2065 - ';
		$data['cta_text']='Ingresar';
		$data['cat_url']='dosmil/categoria';
		$data['cta_url']='auth/login';
		$this->load->view('estaticos/2065',$data);
	}
	public function post($id)
	{
		$post = $this->Dosmil_model->get_posts($id);
		$categoria = $this->Dosmil_model->get_categories($post['categoria']);
		$data['related']= $this->Dosmil_model->get_posts_by($post['categoria'],$id);
		$autor=$this->Ion_auth_model->user($post['autor'])->row();
		$data['title'] = $post['nombre'].' - ';
		$data['post'] = $post;
		$data['autor'] = $autor->first_name.' '.$autor->last_name;
		$data['cat_url']='dosmil/categoria';
		$data['post_url']='dosmil/post';
		$data['categoria']=$categoria;
		$this->load->view('estaticos/2065_detalle',$data);
	}
	public function categoria($id)
	{
		$data['posts'] = $this->Dosmil_model->get_posts_by($id);
		$data['cats'] = $this->Dosmil_model->get_categories();
		$categoria = $this->Dosmil_model->get_categories($id);
		$data['title'] = 'El 2065 - '.$categoria['nombre'].' ';
		$data['descripcion']= $categoria['descripcion'];
		$data['cta_text']='Ingresar';
		$data['cat_url']='dosmil/categoria';
		$data['cta_url']='auth/login';
		$data['post_url']='dosmil/post';
		$this->load->view('estaticos/categoria',$data);
	}
	public function loadMore()
	{
		sleep(3);
		$last_post=$this->input->post("lastId");
		if($this->input->is_ajax_request() && $last_post)
		{
			$new_posts = $this->Dosmil_model->get_posts_by($post['categoria'],FALSE, $last_post);
			if($new_posts !== FALSE)
			{
				echo json_encode(array("res" => "success", "posts" => $new_posts));
			}
			else
			{
				echo json_encode(array("res" => "empty"));
			}
		}
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
		$crud->unset_texteditor('descripcion','texto');
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