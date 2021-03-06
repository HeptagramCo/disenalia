<?php

    class UserModel{

        protected $conn;
        public $rows;
        public $rowsAll;

        public function __construct()
        {
            $this->conn = new Consultas();
        }


        public function get($comparate = null, $value = null)
        {
            $query = $this->conn->getConsultar("
                SELECT *
                FROM user
                WHERE $comparate = '$value'
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rows[] = $row;
            }

            return $this->rows;


           /* while($row = $query->fetch_all())
            {
               return [
                    "nombre" => $row["name_user"],
                    "nick" => $row["nick_user"],
                    "email" => $row["email_user"],
                    "type" => $row["type_user"],
                    "direccion" => $row["direccion_user"],
                    "ciudad" => $row["ciudad_user"],
                    "postal" => $row["postal_user"],
                    "web" => $row["web_user"]
                ];

            }*/

        }

        public function getAll()
        {
            $query = $this->conn->getConsultar("
                SELECT *
                FROM user
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rowsAll[] = $row;
            }

            return $this->rowsAll;

        }

        public function set($user, $correo, $values = array())
        {

            $comparateOne = $this->get("name_user",$user);
            $comparateTwo = $this->get("email_user",$correo);
            if(empty($comparateOne)){
                if(empty($comparateTwo)){
                    extract($values);
                    $pass = Security::getEncrypt($password);
                    if($this->conn->getConsultar("
                            INSERT INTO   user
                            (real_name_user, name_user, password_user, type_user, twitter_user, facebook_user, email_user)
                            VALUES
                            ('$name', '$user','$pass', '$type', '$twitter' , '$facebook' , '$email')
                        "))
                    {
                       Cookies::set("complete","Se ha creadi el usuario correctamente","20-s");
                       Redirection::go("user");
                    }else{
                       Cookies::set("alert","Error: por algun motivo no se pudo crear el usuario intenta de nuevo","20-s");
                       Redirection::go("user");
                    }
                }else{
                   Cookies::set("alert","¡Atencion! El usuario ya existe","20-s");
                   Redirection::go("user");
                }
            }else{
               Cookies::set("alert","¡Atencion! El usuario ya existe","20-s");
               Redirection::go("user");
            }
        }

    public function edit($useractual,$mailactual, $comp, $user, $correo, $values=array()){
            $comparateOne = $this->get("name_user",$comp);
            $comparateTwo = $this->get("email_user",$correo);
            if($useractual == $comp){
              if($mailactual == $correo){
                extract($values);
                    if($this->conn->getConsultar("
                        UPDATE user
                        SET real_name_user = '$real_name', name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password', type_user ='$type'
                        WHERE name_user = '$user'
                    "))
                    {
                        $_SESSION['user']=$name;
                       Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
                       Redirection::go("user/me");
                    }else{
                       Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
                       Redirection::go("user/me");
                    }
              }else{
                if(empty($comparateTwo)){
                    extract($values);
                    if($this->conn->getConsultar("
                        UPDATE user
                        SET real_name_user = '$real_name', name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password', type_user ='$type'
                        WHERE name_user = '$user'
                    "))
                    {
                        $_SESSION['user']=$name;
                       Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
                       Redirection::go("user/me");
                    }else{
                       Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
                       Redirection::go("user/me");
                    }
                }else{
                  Cookies::set("alert","Error: El correo ya esta registrado","20-s");
                  Redirection::go("user/me");
                }
              }
            }else{

              if($mailactual == $correo){
                if(empty($comparateOne)){
                    extract($values);
                    if($this->conn->getConsultar("
                        UPDATE user
                        SET real_name_user = '$real_name', name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password', type_user ='$type'
                        WHERE name_user = '$user'
                    "))
                    {
                        $_SESSION['user']=$name;
                       Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
                       Redirection::go("user/me");
                    }else{
                       Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
                       Redirection::go("user/me");
                    }
                }else{
                  Cookies::set("alert","¡Atencion! El usuario ya existe","20-s");
                  Redirection::go("user/me");
                }
              }else{
                if(empty($comparateOne)){
                  if(empty($comparateTwo)){
                      extract($values);
                      if($this->conn->getConsultar("
                          UPDATE user
                          SET real_name_user = '$real_name', name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password', type_user ='$type'
                          WHERE name_user = '$user'
                      "))
                      {
                          $_SESSION['user']=$name;
                         Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
                         Redirection::go("user/me");
                      }else{
                         Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
                         Redirection::go("user/me");
                      }
                  }else{
                     Cookies::set("alert","¡Atencion! El correo ya existe","20-s");
                     Redirection::go("user/me");
                  }
              }else{
                 Cookies::set("alert","¡Atencion! El usuario ya existe","20-s");
                 Redirection::go("user/me");
              }
            }           
        }
    }
        public function editById($useractual,$mailactual, $comp, $id, $correo, $values=array()){
            $comparateOne = $this->get("name_user",$comp);
            $comparateTwo = $this->get("email_user",$correo);
            if($useractual == $comp){
              if($mailactual == $correo){
                extract($values);
                    if($this->conn->getConsultar("
                        UPDATE user
                        SET real_name_user = '$real_name', name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password', type_user ='$type'
                        WHERE id_user = '$id'
                    "))
                    {
                       Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
                       Redirection::go("user");
                    }else{
                       Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
                       Redirection::go("user");
                    }
              }else{
                if(empty($comparateTwo)){
                    extract($values);
                    if($this->conn->getConsultar("
                        UPDATE user
                        SET real_name_user = '$real_name', name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password', type_user ='$type'
                        WHERE id_user = '$id'
                    "))
                    {
                       Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
                       Redirection::go("user");
                    }else{
                       Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
                       Redirection::go("user");
                    }
                }else{
                  Cookies::set("alert","Error: El correo ya esta registrado","20-s");
                  Redirection::go("user");
                }
              }
            }else{

              if($mailactual == $correo){
                if(empty($comparateOne)){
                    extract($values);
                    if($this->conn->getConsultar("
                        UPDATE user
                        SET real_name_user = '$real_name', name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password', type_user ='$type'
                        WHERE id_user = '$id'
                    "))
                    {
                       Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
                       Redirection::go("user");
                    }else{
                       Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
                       Redirection::go("user");
                    }
                }else{
                  Cookies::set("alert","¡Atencion! El usuario ya existe","20-s");
                  Redirection::go("user");
                }
              }else{
                if(empty($comparateOne)){
                  if(empty($comparateTwo)){
                      extract($values);
                      if($this->conn->getConsultar("
                          UPDATE user
                          SET real_name_user = '$real_name', name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password', type_user ='$type'
                          WHERE id_user = '$id'
                      "))
                      {
                         Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
                         Redirection::go("user");
                      }else{
                         Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
                         Redirection::go("user");
                      }
                  }else{
                     Cookies::set("alert","¡Atencion! El correo ya existe","20-s");
                     Redirection::go("user");
                  }
              }else{
                 Cookies::set("alert","¡Atencion! El usuario ya existe","20-s");
                 Redirection::go("user");
              }
            }           
        }
        }
/*
        public function edit($id,$user){
            if($this->conn->getConsultar("
                    UPDATE user
                    SET name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password'
                    WHERE name_user NOT IN(
                            SELECT name_user FROM user WHERE id_user != $id
                        )
                ")){

            }
        }
*/
/*
        public function edit($user, $values = array())
        {
            extract($values);
            if($this->conn->getConsultar("
                UPDATE user
                SET name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password', type_user ='$type'
                WHERE name_user = '$user'
            "))
            {
                $_SESSION['user']=$name;
               Cookies::set("edit","Se ha editado el usuario correctamente","20-s");
               Redirection::go("user");
            }else
            {
               Cookies::set("alert","Error: No se ha podido editar el usuario intenta de nuevo","20-s");
               Redirection::go("user");
            }
        }*/
/*
        public function editById($id, $values = array())
        {
            extract($values);
            if($this->conn->getConsultar("
                UPDATE user
                SET name_user = '$name', email_user = '$email', twitter_user = '$twitter', facebook_user='$facebook', password_user='$password'
                WHERE id_user = '$id'
            "))
            {
               Cookies::set("edit","Se ha editado el usuario correctamente","20-s");
               Redirection::go("user");
            }else
            {
               Cookies::set("alert","Error: No se ha podido editar el usuario intenta de nuevo","20-s");
               Redirection::go("user");
            }
        }*/

        public function editAvatar($user, $values = array())
        {
            extract($values);
            if($this->conn->getConsultar("
                UPDATE user
                SET avatar_user = '$avatar'
                WHERE name_user = '$user'
            "))
            {
               Cookies::set("edit","Se ha editado el Avatar correctamente","20-s");
               Redirection::go("admin");
            }else
            {
               Cookies::set("alert","Error: No se ha podido editar el avatar intenta de nuevo","20-s");
              Redirection::go("admin");
            }
        }

        public function delete($id)
        {
            if($this->conn->getConsultar("
                DELETE FROM user
                WHERE id_user = '$id'
            ")){
               Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
               Redirection::go("user");
            }else
            {
               Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
              Redirection::go("user");
            }
        }
    }
