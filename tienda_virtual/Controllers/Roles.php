<?php 
//====================================================//
class Roles extends Controllers{
	public function __construct()
	{
	parent::__construct();
	}	
	public function Roles()
	{
		$data['page_id']= 3;
		$data['page_tag'] = "Roles Usuario";
		$data['page_title'] = "Roles Usuario";
		$data['page_name'] = "Roles Usuario <small> Tienda Virtual </small>";
		$this->views->getView($this,"roles",$data);
	}

	public function getRoles()
	{
		$arrData = $this->model->selectRoles();

		for ($i=0; $i < count($arrData); $i++){
			if($arrData[$i]['status'] ==1)
			{
				$arrData[$i]['status'] ='<span class="badge badge-success">Activo</span>';
			}else{
				$arrData[$i]['status'] ='<span class="badge badge-danger">Inactivo</span>';
			}

			$arrData[$i]['options'] = '<div class="text-center">
			
			<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title="Permisos">
			<i class="fas fa-key"></i>
			</button>

			<button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar">
			<i class="fas fa-pencil-alt"></i>
			</button>

			<button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['idrol'].'" title="Eliminar">
			<i class="fas fa-trash-alt"></i>
			</button>
			</div>';
		}
		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
		die();
	}


	public function getRol(int $idrol)
	{
		$intIdRol = intval(strClean($idrol));
		if($intIdRol > 0 )
		{
			$arrData = $this->model->selectRol($intIdRol);
			if(empty($arrData))
			{
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			}else{
				$arrResponse = array('status' => true, 'data'=> $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}

	public function setRol(){
		$intIdRol = intval($_POST['idRol']);
		$strRol = strClean($_POST['txtNombre']);
		$strDescripcion = strClean($_POST['txtDescripcion']);
		$intStatus = intVal($_POST['listStatus']);
		$request_rol = $this->model->insertRol($strRol,$strDescripcion,$intStatus);

		if($intIdRol == 0)
		{
			//crear
			$request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus);
			$option = 1;
		}else{
			//Actualizar
			$request_rol = $this->model->updateRol($intIdRol, $strRol, $strDescripcion, $intStatus);
			$option = 2;
		}


		if($request_rol > 0)
		{
			if($option == 1)
			{

				$arrResponse = array('status' => true, 'msg' => 'Datos Guardados Correctamente');

			}else{

				$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados Correctamente');
			}

		}else if($request_rol == 'exist'){

			$arrResponse = array('status' => false, 'msg' => '¡Atención! El Rol ya existe');	

		}else{

			$arrResponse = array('status' => false, 'msg' => 'No es posible Guardar Los Datos');
		}
		echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		die();
	}
//======================================================================//
	public function delRol()
	{
		if($_POST){
			$intIdRol = intval($_POST['idrol']);
			$requestDelete = $this->model->deleteRol($intIdRol);
			if($requestDelete == 'ok')
			{
				$arrResponse = array('status'=> true, 'msg' => 'Se ha eliminado el rol');
			}else if($requestDelete == 'exist'){
				$arrResponse = array('status'=> false, 'msg' => 'No es posible Eliminar un Rol asociado a usuarios');
			}else{
				$arrResponse = array('status'=> false, 'msg' => 'Error al eliminar el rol');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
		}
		die();
	}




	//======================================================================//
}
 ?>