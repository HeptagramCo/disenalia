<?php
session_start();
class BanerController{

	public function indexAction()
		{
			if(isset($_SESSION['user']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "editor"){
				$user = $_SESSION['user'];
	    		$consulta = new BanerModel();
	    		$values = $consulta -> getall();
	        	return new View("/admin/baner", ["title"=>"Administra las Imagenes del baner | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin", "values" => $values]);
	        }else{
				header('Location:'.Rutas::getDireccion('login'));
			}
		}
}