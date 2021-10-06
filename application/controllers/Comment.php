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
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required',   array('required' => "username is required"));
		$this->form_validation->set_rules('message', 'message', 'required',  array('required' => "message is required"));

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', "Username and Message are required.");
		}
		else {
			$this->load->model("Comments");
			if (!is_null($this->Comments->isUsernameExists($username))){
				$this->session->set_flashdata('message', $username." - This username already exists.");
			}
			else{
				$data["username"] = $username;
				$data["message"] = $message;
				$this->Comments->add($data);
			}
		}
		redirect("comment");
	}
}