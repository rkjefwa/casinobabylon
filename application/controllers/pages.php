<?php
class pages extends CI_Controller{
	
	function __construct(){
		parent:: __construct();
		} 
	
	public function views($page='HOME'){
		
		if(!file_exists('application/views/pages/'.$page.'.php'))
		{
			//Error , the page does not exist 	
			show_404();
			
		}
		$data['title'] = ucfirst($page);
		
		//$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page,$data);
		//$this->load->view('templates/footer',$data);
		//$this->load->view('templates/template',$data);
	}
	public function aboutus(){
		
	}
	
	public function contacts(){
		
	}
	
 }
?>