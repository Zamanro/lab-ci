<?php

class Select_c extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
 }

		public function index()
			{
				$this->load->model('selects');
				$data = $this->selects->select_database();
				$this->load->view('home_view',$data);

			}
	}

?>