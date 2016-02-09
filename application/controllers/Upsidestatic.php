<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpsideStatic extends CI_Controller {
	public function index()
	{
		$data['title']='';	
		$this->load->view('estaticos/index',$data);
	}
	public function upsidedown()
	{
		$data['title']='';	
		$this->load->view('estaticos/upsidedown',$data);
	}

	public function labs()
	{
		$data['title']='Labs - ';	
		$this->load->view('estaticos/labs',$data);
	}
	//SUB Links de LABS
	public function labs_uno()
	{
		$data['title']='Titulo Caso Lab - ';	
		$this->load->view('estaticos/lab_01',$data);
	}
	public function academia()
	{
		$data['title']='Academia - ';	
		$this->load->view('estaticos/academia',$data);
	}
	public function academia_uno()
	{
		$data['title']='Titulo Caso Academia - ';	
		$this->load->view('estaticos/academia_01',$data);
	}
	public function empresa()
	{
		$data['title']='Empresa - ';	
		$this->load->view('estaticos/empresa',$data);
	}
	public function empresa_uno()
	{
		$data['title']='Titulo Caso Empresa - ';	
		$this->load->view('estaticos/empresa_01',$data);
	}
	public function nuestro_metodo()
	{
		$data['title']='Nuestro Método - ';	
		$this->load->view('estaticos/nuestro_metodo',$data);
	}
	public function inspiracion()
	{
		$data['title']='Inspiración - ';	
		$this->load->view('estaticos/inspiracion',$data);
	}
	public function inspiracion_uno()
	{
		$data['title']='Titulo caso inspiracion - ';	
		$this->load->view('estaticos/inspiracion_01',$data);
	}
	public function recursos()
	{
		$data['title']='Recursos - ';	
		$this->load->view('estaticos/recursos',$data);
	}
	public function recurso_uno()
	{
		$data['title']='Titulo recurso - ';	
		$this->load->view('estaticos/recurso_01',$data);
	}
	public function contactenos()
	{
		$data['title']='Contactenos - ';	
		$this->load->view('estaticos/contactenos',$data);
	}
}
