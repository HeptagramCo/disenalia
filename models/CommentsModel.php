<?php

    class CommentsModel{

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
                FROM comment
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
                FROM comment
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rowsAll[] = $row;
            }

            return $this->rowsAll;

        }

        public function set($data = array())
        {

            extract($data);
            if($this->conn->getConsultar("
               INSERT INTO comment
               (author_comment, email_comment, date_comment, comment, id_post)
               VALUES
               ('$name', '$email', '$date', '$message', '$id')
            "))
            {
               Cookies::set("complete","Tu comentario ha sido guardado correctamente","3-s");
            }else{
               Cookies::set("alert","Error: Por algun motivo no se ha guardado tu comentario. Favor de notificar al administrador","3-s");
            }
        }

        public function delete($id)
        {
            if($this->conn->getConsultar("
                DELETE FROM comment
                WHERE id_comment = '$id'
            ")){
               Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
               Redirection::go("inbox");
            }else
            {
               Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
              Redirection::go("inbox");
            }
        }
    }
