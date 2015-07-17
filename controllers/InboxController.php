<?php
session_start();
class InboxController{

	public function indexAction()
	{
		if(isset($_SESSION['user']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "moderador"){
    		$user = $_SESSION['user'];
    		$consulta_comments = new CommentsModel();
      		$values = $consulta_comments->getAll();
        	return new View("admin/inbox", ["title"=>"Administra los comentarios | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin", "values" => $values]);
        }else{
			header('Location:'.Rutas::getDireccion('login'));
		}
	}

	public function deleteAction()
	{
		if(isset($_SESSION['user']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "moderador"){
			$comment = $_GET['d'];
			$consulta = new CommentsModel();
	    	$consulta->delete($comment);
	    }else{
				header('Location:'.Rutas::getDireccion('login'));
		}
	}
}
