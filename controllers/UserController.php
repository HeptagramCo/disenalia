<?php
session_start();
class UserController{

	public function indexAction()
		{
			if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
				$user = $_SESSION['user'];
	        	$consulta = new UserModel();
	        	$values  = $consulta->getAll();
	        	return new View("admin/adminUsers", ["title"=>"Administra los usuarios | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin","rows"=>$values]);
	        }else{
				header('Location:'.Rutas::getDireccion('login'));
			}
		}
	public function meAction()
		{
			if(isset($_SESSION['user']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "editor" || $_SESSION['type'] == "moderador"){
				$user = $_SESSION['user'];
	        	$consulta = new UserModel();
	        	$values  = $consulta->get('name_user',$user);
	        	return new View("admin/editUser", ["title"=>"Edita tu usuario | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin","values"=>$values]);
	        }else{
				header('Location:'.Rutas::getDireccion('login'));
			}
		}

	
	public function updateAction(){
		if (isset($_POST['add'])) {
		$consulta = new UserModel();
		return $consulta->edit($_POST['actual_name'], $_POST['actual_email'],$_POST['name'],$_SESSION['user'],$_POST['email'],[
				"real_name" => $_POST['real_name'],
				"name" => $_POST['name'],
				"type"=> $_POST['type'],
				"password" => Security::getEncrypt($_POST['password']),
				"facebook" => $_POST['facebook'],
				"twitter" => $_POST['twitter'],
				"email" => $_POST['email'],
				
			]);
	}
	}

	public function updateUserAction(){
		$consulta = new UserModel();
		if($_POST['id']==$_SESSION['id']){
			return $consulta->edit($_POST['actual_name'], $_POST['actual_email'],$_POST['name'],$_SESSION['user'],$_POST['email'],[
				"real_name" => $_POST['real_name'],
				"name" => $_POST['name'],
				"type"=> $_POST['type'],
				"password" => Security::getEncrypt($_POST['password']),
				"facebook" => $_POST['facebook'],
				"twitter" => $_POST['twitter'],
				"email" => $_POST['email'],
				
			]);
		}
		return $consulta->editById($_POST['actual_name'], $_POST['actual_email'],$_POST['name'],$_POST['id'],$_POST['email'],[
				"real_name" => $_POST['real_name'],
				"name" => $_POST['name'],
				"type"=> $_POST['type'],
				"password" => Security::getEncrypt($_POST['password']),
				"facebook" => $_POST['facebook'],
				"twitter" => $_POST['twitter'],
				"email" => $_POST['email'],
				
			]);
	}

	public function deleteAction(){
		$id = $_GET['id'];
		if($id==$_SESSION['id']){
			Cookies::set("alert","No puedes eliminar tu usuario","20-s");
            Redirection::go("admin");
		}
		else{
			$consulta = new UserModel();
			return $consulta->delete($_GET['id']);
		}
		
	}

	public function editAction(){
		$consulta = new UserModel();
		$values = $consulta->get("name_user",$_POST['name']);
		return $values;
	}

	public function addAction(){
		if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
				$user = $_SESSION['user'];
	        	return new View("admin/addUser", ["title"=>"Administra los usuarios | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin"]);
	        }else{
				header('Location:'.Rutas::getDireccion('login'));
			}
	}

	public function createUserAction(){
		$consulta = new UserModel();
		$values = $consulta->set($_POST['user'],$_POST['email'],$_POST);
		return $values;
	}


}