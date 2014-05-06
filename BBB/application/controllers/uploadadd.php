 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploadadd extends CI_Controller {

		public function index(){
			$this->load->view('students');
		}

		public function addupload(){
			

			$this->load->database();
			$this->load->model("uploadfile");
			


			$this->uploadfile->setUsername($_REQUEST["name"]);
			
			$this->load->view('reserveupload');

			$this->uploadfile->addupload();
			
		}
	}
?>