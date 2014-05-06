<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		echo "login";
	}
	
	public function login () {
		$data = array();
		if($post = $this->input->post()) {
			extract($post);
			$sql = "select * from userid where username = '$username' and password = '$password' ";
			$ret = $this->db->query($sql);
			
			
			
			if($ret->num_rows()){
			
				
			
				$data_ret = $ret->result();
				$this->session->set_userdata('username',$data_ret[0]->id);
				//die();
				$this->load->view('reservelogin');
				
				}else{
				
				
				
				$data['message'] = "Wrong user name or password";
				
				echo 'Wrong user name or password';	
				$this->load->view('login_view');
			}
		}
		else{$this->load->view('login_view');}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */