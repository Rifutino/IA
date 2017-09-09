<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('template');
	}


	public function index() {
		$this->template->model_basic('welcome_message', 'welcome');
	}
}
