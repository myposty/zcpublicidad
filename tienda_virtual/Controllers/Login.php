<?php 

class Login extends Controllers{
	public function __construct()
	{
	parent::__construct();
	}	
	public function Login()
	{
		
		$data['page_tag'] = "Login - Tienda Virtual";
		$data['page_title'] = "Login";
		$data['page_name'] = "login";
		
		$this->views->getView($this,"login",$data);
	}
	
}
 ?>