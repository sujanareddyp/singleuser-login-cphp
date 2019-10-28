<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminModel extends CI_model
	{
	//==========================================//
	var $db;//create a object variable for database
		function __construct() {
			parent::__construct();
			$this->db = $this->load->database('default', TRUE);//db connection
		}	
		public function savecontact($name,$email,$mobile,$message,$pass)
		{
			$sql="insert into contact(name,email,mobile,message,password)
			values('$name','$email','$mobile','$message','$pass')";
			$this->db->query($sql);
			return true;
		}
		
		public function checkmylogin($email,$pass)
		{
			$sql="select * from contact where email='$email' and password='$pass'";
			
			$res=$this->db->query($sql);
			if($res->num_rows() == 1)
			{
				$row=$res->row();//fetch praticular record
				
				
				$data=array("id"=>$row->id,"name"=>$row->name);//making mixed array which we need to pass to session
				
				$this->session->set_userdata($data);//setting the session variable using set_userdata()
				
				return true;
			}
			else{
				return false;
			}
		}
		
	//===============================================//
	}//adminmodel closes




?>