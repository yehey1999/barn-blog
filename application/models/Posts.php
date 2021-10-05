<?php
	class Posts extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		function getPosts(){
			$query = $this->db->query("select * from posts");
			return $query->result();
		}
	}
?>