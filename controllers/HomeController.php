<?php

class HomeController{

    public function indexAction($hola="hola")
    {
    	$consulta = new PostModel();
    	$values = $consulta -> getFull();
    	$categorymodel = new CategoryModel();
    	$category = $categorymodel->getAll();
        return new View("frontend/home", ["title" => "Diseñalia | Diseño - Marketing - Programacion", "layout" => "on", "nameLayout" => "layout","category" => $category  ,"values" => $values, "profile_act" => "off", "posttop" =>"on"]);
    }

    public function categoryAction()
    {
      $cat = $_GET['q'];
      $consulta = new PostModel();
      $values = $consulta->get("id_category",$cat);
      $consult_cat = new CategoryModel();
      $values_in = $consult_cat->get("id_category",$cat);
      foreach ($values_in as $key) {
         $incategory = $key["name_category"];
      }
      $categorymodel = new CategoryModel();
      $category = $categorymodel->getAll();
        return new View("frontend/category", ["title" => "Diseñalia | ".$incategory, "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values, "profile_act" => "off", "posttop" =>"off"]);
    }

    public function searchAction()
    {
      $search = $_POST['search'];
      $consulta = new PostModel();
      $values = $consulta->search($search);
      $categorymodel = new CategoryModel();
      $category = $categorymodel->getAll();
        return new View("frontend/search", ["title" => "Diseñalia | ". $search, "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values, "profile_act" => "off", "search_v" => $search, "posttop" =>"off"]);
    }

   public function likeAction()
   {
      if(isset($_POST['id']))
      {
         $consulta = new PostModel();
         $add = $consulta->editEsp($_POST['id'], "likes_post");
         return $consulta->get("id_post",$_POST['id']);
      }
   }
}
