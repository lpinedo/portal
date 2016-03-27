
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MX_Controller
{
	
	public function __construct(){
		parent::__construct();
	}
				
	
	public function index()	{
		$data['module']='portal';
		$data['view']='indexcms';
		$data['APP_TITTLE']='CMS Portal';
		echo Modules::run('template/template/index',$data);
	}
	
	public function cms()
	{
		
		//$this->load->view('indexcms');
		
	}
}
/*
*end modules/login/controllers/index.php
*/