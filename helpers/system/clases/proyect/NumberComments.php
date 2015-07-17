<?php

class NumberComments{
   public static function getComments($id)
   {
      $comments = new CommentsModel();
      $values = $comments->get("id_post", $id);
      $number = count($values);
      return $number;
   }
}


?>
