<?php
class Desafios_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_posts($id= FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->select('desafios_post.id AS p_id, desafios_post.nombre as p_nombre, desafios_post.fecha as p_fecha, desafios_post.imagen as p_imagen, desafios_post.texto, desafios_post.categoria as cat_id, desafios_post.autor, desafios_categoria.nombre as p_categoria')->from('desafios_post')->join('desafios_categoria', 'desafios_post.categoria=desafios_categoria.id', 'left')->limit(3)->order_by('desafios_post.id','desc')->get();
			//el tipo de comentario es 2
			foreach ($query->result() as $row) {
				$row->comentarios = $this->db->select('id_post')->from('post_comments')->where('tipo','2')->where('id_post',$row->p_id)->count_all_results();;
				$data[] = $row;
			}
						if($query->num_rows() > 0){
				return $data;
			}
			else{
				return false;
			}
		}

		$query = $this->db->get_where('desafios_post', array('id' => $id));
		return $query->row_array();
	}
	public function get_posts_by($id,$current=FALSE)
	{
		$query = $this->db->select('desafios_post.id AS p_id, desafios_post.nombre as p_nombre, desafios_post.fecha as p_fecha, desafios_post.imagen as p_imagen, desafios_post.texto, desafios_post.autor, desafios_post.categoria as cat_id , desafios_categoria.nombre as p_categoria')->from('desafios_post')->where('desafios_post.categoria',$id)->join('desafios_categoria', 'desafios_post.categoria=desafios_categoria.id', 'left');
		if($current){
			$query = $query->limit(3)->order_by('desafios_post.id','random')->where('desafios_post.id !=', $current)->get();
		}
		else{
			$query = $query->limit(3)->order_by('desafios_post.id','desc')->get();
		}
		if($query->num_rows() > 0){
		//el tipo de comentario es 2
			foreach ($query->result() as $row) {
				$row->comentarios = $this->db->select('id_post')->from('post_comments')->where('tipo','2')->where('id_post',$row->p_id)->count_all_results();;
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
		$query = $this->db->get('desafios_categoria');
		return $query->result_array();
	}

	$query = $this->db->get_where('desafios_categoria', array('id' => $id));
	return $query->row_array();
}
}