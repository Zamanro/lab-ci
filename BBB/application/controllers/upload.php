<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		
	}

	public function index()
	{
		$this->load->view('upload/index');
	}

	public function do_upload()
	{
		
		$this->load->database();  //connect database
		$this->load->model('uploadfile');


		$config['upload_path'] = 'upload/';
		$config['allowed_types'] = 'gif|jpg|png|avi|flv|wmv|mpeg|mp4|mp3|txt|docx';
		$config['max_size']	= '100000000000000000000000000';
		$config['file_name'] =$_REQUEST["name"];  //  รับค่าชื่อ จากหน้า view 


		$this->uploadfile->setName($config['file_name']);

		$this->load->library('upload', $config);
		$this->uploadfile->add();	
		
		
		if (! $this->upload->do_upload("upload"))
		{
			/*$this->load->view('upload/index');
			echo ('Error');
			$this->uploadfile->add();*/
			
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload/index', $error);
			
		}
		else
		{
			echo $this->upload->display_errors();
			$this->load->view('reserveupload');
			//echo anchor("upload","Back");
			
		}	
	}	
	
}
?>