<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('adminmodel');
		$this->load->library('session');
	}
	
	public function index()
	{
		
		$this->load->view('index');
	}
	public function signup()
	{
		
		$this->load->view('signup');
	}
	public function savecontact()
	{
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$message=$_POST['msg'];
		$pass=$_POST['pass'];
		$status=$this->adminmodel->savecontact($name,$email,$mobile,$message,$pass);
		if($status==true)
		{
			$this->session->set_flashdata("msg","data Saved successfully");
			header("location:index.php");
		}
		
	}
	public function logincheck()
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$status=$this->adminmodel->checkmylogin($email,$pass);
		
		if($status)
		{
			header("Location:home.php");//home.php 1)check routes
		}
		else{
			$this->session->set_flashdata("msg","Please check emailid or password");
			header("Location:index.php");//index.php 1)check routes 
		}
		
	}
	
	
//===================================================================//
}//admin modelcloses
