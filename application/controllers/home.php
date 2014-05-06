<?php

class Home extends CI_Controller 
{
	function __construct()
	{		
		parent::__construct();
		$this->load->model('test');
	}
	
	function index()
	{		
		$dataFile = $this->Work0->readfile();
		$numRowAll = count($dataFile);
		$data['numRowAll'] = $numRowAll;
		$numRowComment = 0;
		$check = 0;
		
			$e = 0;
			foreach($dataFile  as $textss)
			{
			$taps = " ";
			$texts = $taps.$textss;
					
					 $i =0;
					
					if(strpos($texts,'//')){
						$i = 1;
						
					}
					if(strpos($texts,"/*")){
						$e = 1;
					}
					
					
					if ($i > 0)
						{
							$numRowComment = $numRowComment +1;
						}
						
					if ($e > 0)
						{
							$check = $check +1;
						}
					if(strpos($texts,"*/")){
						$e = 0;
					}
			}
		
		$data['numComment'] = $numRowComment + $check;
		$data['numCode'] = $numRowAll - ($numRowComment + $check);
		$this->load->view('View', $data);		
	}
}
?>