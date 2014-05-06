<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

		public function index(){
			$this->load->view('students');
		}

		public function addregister(){
			

			$this->load->database();
			$this->load->model("register");
			


			$this->register->setUsername($_REQUEST["username"]);
			$this->register->setPassword($_REQUEST["password"]);
			$this->register->setName($_REQUEST["name"]);
			$this->register->setLastname($_REQUEST["lastname"]);
			$this->register->setType ('1');
			$this->register->setTypedetail('Student');
			
			$this->load->view('reserveregister');

			$this->register->addDatas();
			
		}
	}
?>