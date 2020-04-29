<?php
/**
 * 
 */
class Overview extends CI_Controller
{
	
	public function __construct()
	{
		parrent::__construct();
	}

	public function index ()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
	}
}