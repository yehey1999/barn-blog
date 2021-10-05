<?php
	class Pages extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function view($page = 'home'){
		
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			
			$this->load->model("Posts");
			$data['posts'] = $this->Posts->getPosts();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}