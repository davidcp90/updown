<?php
class Blog_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_posts($id= FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->select('blog_post.id AS p_id, blog_post.nombre as p_nombre, blog_post.fecha as p_fecha, blog_post.imagen as p_imagen, blog_post.texto, blog_post.autor, blog_categoria.nombre as p_categoria')->from('blog_post')->join('blog_categoria', 'blog_post.categoria=blog_categoria.id', 'left')->limit(6)->order_by('blog_post.id','desc')->get();
			foreach ($query->result() as $row) {
				$row->comentarios = $this->db->select('id_post')->from('post_comments')->where('tipo','1')->where('id_post',$row->p_id)->count_all_results();;
				$data[] = $row;
			}
			if($query->num_rows() > 0){
				return $data;
			}
			else{
				return false;
			}
		}

		$query = $this->db->get_where('blog_post', array('id' => $id));
		return $query->row_array();
	}
	public function get_posts_by($id,$current=FALSE)
	{
		$query = $this->db->select('blog_post.id AS p_id, blog_post.nombre as p_nombre, blog_post.fecha as p_fecha, blog_post.imagen as p_imagen, blog_post.texto, blog_post.autor, blog_post.categoria as cat_id , blog_categoria.nombre as p_categoria')->from('blog_post')->where('blog_post.categoria',$id)->join('blog_categoria', 'blog_post.categoria=blog_categoria.id', 'left');
		if($current){
			$query = $query->limit(3)->order_by('blog_post.id','random')->where('blog_post.id !=', $current)->get();
		}
		else{
			$query = $query->limit(3)->order_by('blog_post.id','desc')->get();
		}
		if($query->num_rows() > 0){
		//el tipo de comentario es 1
			foreach ($query->result() as $row) {
				$row->comentarios = $this->db->select('id_post')->from('post_comments')->where('tipo','1')->where('id_post',$row->p_id)->count_all_results();;
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
			$query = $this->db->get('blog_categoria');
			return $query->result_array();
		}

		$query = $this->db->get_where('blog_categoria', array('id' => $id));
		return $query->row_array();
	}
}