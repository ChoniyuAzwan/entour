<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('url');
	}

	public function index() {
		$this->load->view('main');
	}

	public function book() {
		$this->load->view('book');
	}
}
