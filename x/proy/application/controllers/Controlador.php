<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {

	public function index()
	{
		$this->load->view('login.view.php');
	}
	
}
