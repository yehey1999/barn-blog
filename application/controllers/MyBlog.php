<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyBlog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		// $route['my-blog/:num'] 
		//
		// Note: check the application/config/routes.php
		// segment(2) is used to get the params :num (only number)
		// https://codeigniter.com/userguide3/general/routing.html
		$id = $this->uri->segment(2);
		$this->load->model("Blogs");
		$data["blogs"] = $this->Blogs->all();
		$data["title"] = "My-blog";
		$data["current_blog"] = null;
		if (!is_null($id))
			$data["current_blog"] = $this->Blogs->get($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pages/my-blog');
        $this->load->view('templates/footer');
		
	}

	public function addBlog() {
		$title = $this->input->post("title");
		$content = $this->input->post("content");
		$written_by = $this->input->post("written-by");
		$genres = $this->input->post("genres");

		$blog["title"] = $title;
		$blog["content"] = $content;
		$blog["written_by"] = $written_by;
		$blog["genres"] = $genres;

		$this->load->model("Blogs");
		$this->Blogs->add($blog);

		redirect('my-blog');
	}
	
	public function updateBlog() {
		$id = $this->input->post("id");
		$title = $this->input->post("title");
		$content = $this->input->post("content");
		$written_by = $this->input->post("written-by");
		$genres = $this->input->post("genres");

		$blog["title"] = $title;
		$blog["content"] = $content;
		$blog["written_by"] = $written_by;
		$blog["genres"] = $genres;

		$this->load->model("Blogs");
		$this->Blogs->update($blog, $id);

		redirect('my-blog');
	}

	public function deleteBlog() {
		$id = $this->input->post("id");

		$this->load->model("Blogs");
		$this->Blogs->delete($id);

		redirect('my-blog');
	}

}