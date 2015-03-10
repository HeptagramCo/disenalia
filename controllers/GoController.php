<?php

class GoController{

    public function indexAction()
    {
      if(isset($_POST['send']))
      {
         $fecha = date("Y-m-d");
         $comments = new CommentsModel();
         $comments->set([
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "date" => $fecha,
            "message" => $_POST['message'],
            "id" => $_POST['id']
            ]);
      }
      $cat = $_GET['q'];
      $consulta = new PostModel();
      $add = $consulta->editEsp($cat,"views_post");
      $values = $consulta->get("id_post",$cat);
      $categorymodel = new CategoryModel();
      $category = $categorymodel->getAll();
      foreach ($values as $key ) {
        $title = $key['title_post'];
        $id_user = $key['id_user'];
      }
      $consulta_comments = new CommentsModel();
      $comments_values = $consulta_comments->get("id_post",$cat);
      $consulta_profile = new UserModel();
      $profile = $consulta_profile->get("id_user",$id_user);
      return new View("frontend/go", ["title" => $title, "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values, "profile" => $profile, "profile_act" => "on", "comments_values" => $comments_values, "posttop" =>"off"]);
    }
}
