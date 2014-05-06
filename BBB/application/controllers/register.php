<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "register";
	}
	
	public function member() 
			{
		
		if($post = $this->input->post())
		//print_r($post);
		{
			
			extract($post);
			$sql = "INSERT INTO userid (username,password)VALUES('$username','$password')";
			$this->db->query($sql);
			$sql = "INSERT INTO userinfo (name,lastname)VALUES('$name','$lastname')";
			$this->db->query($sql);	
			
			$this->load->view('reserveregister');
		}else{
		$this->load->view('students');
		}
	}	
}
		

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */