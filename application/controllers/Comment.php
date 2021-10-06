<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$data["title"] = "Comment";
		$this->load->model("Comments");
		$data["comments"] = $this->Comments->all();

		$data["message"] = null;
		$message = $this->session->flashdata("message");
		if($message)
			$data["message"] = $message;

        $this->load->view('templates/header', $data);
        $this->load->view('pages/comment');
        $this->load->view('templates/footer');
	}

	public function addComment() {
		$username = $this->input->post("username");
		$message = $this->input->post("message");
		
		$this->load->model("Comments");
		if (!is_null($this->Comments->isUsernameExists($username))){
			// https://stackoverflow.com/questions/30962285/how-to-pass-a-data-with-redirect-in-codeigniter
			$this->session->set_flashdata('message', $username." - This username already exists.");
			redirect("comment");
		}
		else{
			$data["username"] = $username;
			$data["message"] = $message;
			$this->Comments->add($data);
			redirect("comment");
		}

	}
}