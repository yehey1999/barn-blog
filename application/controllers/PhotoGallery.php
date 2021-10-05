<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhotoGallery extends CI_Controller {
	public function index()
	{
		$data["title"] = "Photo-gallery";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/photo-gallery');
        $this->load->view('templates/footer');
	}
}
