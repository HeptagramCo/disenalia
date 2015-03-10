<?php
session_start();
class AdminController{

	public function indexAction()
		{
			if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
				$posts = new PostModel();
      			$values = $posts->getTenMostVisited();
				$user = $_SESSION['user'];
				return new View("admin/admin", ["title"=>"Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin","values"=>$values]);
			}else{
				header('Location:'.Rutas::getDireccion('login'));
			}
		}

}
