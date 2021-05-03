<?php 

class Home extends Controllers{
	public function __construct()
	{
	parent::__construct();
	}	
	public function home()
	{
		$data['page_id']= 1;
		$data['page_tag'] = "Inicio - Tienda Virtual";
		$data['page_title'] = "Página Principal";
		$data['page_name'] = "home";
		$data['page_content'] = "Esta sera un sitio web de venta de producto, disponible Proximamente";

		$this->views->getView($this,"home",$data);
	}
	
}
 ?>