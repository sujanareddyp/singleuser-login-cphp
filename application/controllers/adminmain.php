<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMain extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('adminmodel');
		$this->load->library('session');
		
		if($this->session->userdata("id")=="")
		{
			$this->session->set_flashdata("msg", "Sorry, Unauthorized access!");
			header("location:index.php");
		
		}
	}//contructor closes
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function signup()
	{
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}
	
	public function logout()
	{
		$data=array("id"=>"","name"=>""); 
		//setting the array key to blank and passing it to set_userdata()
		$this->session->set_userdata($data);
		$this->session->set_flashdata("msg","You have logged out successfully.");
		header("Location:index.php");//1)check in routes
		
	}
	
//===================================================================//
}//admin modelcloses
