<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultController extends CI_Controller {
	public function index() {
		$this->load->view('home');
	}

  public function about() {
    $this->load->view('about');
  }
}