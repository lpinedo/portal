<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Login extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function Val_User()
	{
		print_r($_POST);exit;
	}

	
}