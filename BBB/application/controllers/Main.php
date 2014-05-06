 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

		public function index(){
			$this->load->view('students');
		}

		public function addregister(){
			

			$this->load->database();
			$this->load->model("register");
			$this->load->model("userinfo");
			
			$this->register->setUsername($this->input->post('username'));
			$this->register->setPassword($this->input->post('password'));
			$this->register->setClassId(5);
			/*$this->userinfo->setField($this->input->post('field'));
			$this->userinfo->setFieldValue($this->input->post('fieldValue'));*/
			
			$this->register->addDatas();
			$id = $this->db->insert_id();
			
			$this->userinfo->addInfo($id, 'name',$this->input->post('name'));
			$this->userinfo->addInfo($id, 'lastname',$this->input->post('lastname'));
			
			
			$this->load->view('reserveregister');

			/*$this->register->addDatas();
			$this->userinfo->addDatas2();*/
			
		}
	}
?>