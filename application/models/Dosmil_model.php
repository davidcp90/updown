<?php
class Dosmil_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_posts($id= FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->select('dosmil_post.id AS p_id, dosmil_post.nombre as p_nombre, dosmil_post.fecha as p_fecha, dosmil_post.imagen as p_imagen, dosmil_post.texto , dosmil_post.categoria as cat_id, dosmil_post.autor, dosmil_categoria.nombre as p_categoria')->from('dosmil_post')->join('dosmil_categoria', 'dosmil_post.categoria=dosmil_categoria.id', 'left')->limit(6)->order_by('dosmil_post.id','desc')->get();
			// el tipo es 3
			foreach ($query->result() as $row) {
				$row->comentarios = $this->db->select('id_post')->from('post_comments')->where('tipo','3')->where('id_post',$row->p_id)->count_all_results();;
				$data[] = $row;
			}
			if($query->num_rows() > 0){
				return $data;
			}
			else{
				return false;
			}
		}

		$query = $this->db->get_where('dosmil_post', array('id' => $id));
		return $query->row_array();
	}
	public function get_posts_by($id,$current=FALSE,$load_more=FALSE)
	{
		$query = $this->db->select('dosmil_post.id AS p_id, dosmil_post.nombre as p_nombre, dosmil_post.fecha as p_fecha, dosmil_post.imagen as p_imagen, dosmil_post.texto, dosmil_post.autor, dosmil_post.categoria as cat_id, dosmil_categoria.nombre as p_categoria')->from('dosmil_post')->where('dosmil_post.categoria', $id)->join('dosmil_categoria', 'dosmil_post.categoria=dosmil_categoria.id', 'left');
		if($current){
			$query = $query->limit(3)->order_by('dosmil_post.id','random')->where('dosmil_post.id !=', $current)->get();
		}
		elseif($load_more){
			$query = $query->where('dosmil_post.id <', $load_more)->order_by('dosmil_post.id','desc')->limit(6)->get();
		}
		else{
			$query = $query->limit(6)->order_by('dosmil_post.id','desc')->get();
		}
		if($query->num_rows() > 0){
		//el tipo de comentario es 3
			foreach ($query->result() as $row) {
				$row->comentarios = $this->db->select('id_post')->from('post_comments')->where('tipo','3')->where('id_post',$row->p_id)->count_all_results();;
				$data[] = $row;
			}
			return $data;
		}
		else{
			return false;
		}

	}
	public function get_categories($id= FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('dosmil_categoria');
			return $query->result_array();
		}

		$query = $this->db->get_where('dosmil_categoria', array('id' => $id));
		return $query->row_array();
	}
}