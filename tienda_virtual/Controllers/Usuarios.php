<?php 

class Usuarios extends Controllers{
	public function __construct()
	{
	parent::__construct();
	}	
	public function Usuarios()
	{
		
		$data['page_tag'] = "Usuarios - Tienda Virtual";
		$data['page_title'] = "USUARIOS <small> Tienda Virtual</small>";
		$data['page_name'] = "usuarios";
		$data['page_functions_js'] = "function_usuarios.js";
		$this->views->getView($this,"usuarios",$data);
	}
	
}
 ?>