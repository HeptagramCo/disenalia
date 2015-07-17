<?php

    class BanerModel{

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
                FROM baner
                WHERE $comparate = '$value'
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rows[] = $row;
            }

            return $this->rows;

        }

        public function getAll()
        {
            $query = $this->conn->getConsultar("
                SELECT *
                FROM baner
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
                INSERT INTO baner
                (url_slide)
                VALUES
                ('$url')
            "))
            {
                echo "<script>alert('Registrado Correctamente')</script>";
                header('Location:'.Rutas::getDireccion('baner'));
            }else{
                exit("El registro no se ha completado por algun motivo");
            }
        }

        public function edit($id, $values = array())
        {
            extract($values);
            if($this->conn->getConsultar("
                UPDATE baner
                SET url_slide = '$url' 
                WHERE id_slide = '$id'
            "))
            {
                echo "<script>alert('Editado Correctamente')</script>";
                header('Location:'.Rutas::getDireccion('baner'));
            }else
            {
                exit("Ocurrio un error en la modificacion");
            }
        }

        public function delete($id)
        {
            if($this->conn->getConsultar("
                DELETE FROM baner
                WHERE id_slide = '$id'
            ")){
                header('Location:'.Rutas::getDireccion('baner'));
            }else
            {
                exit("Ocurrio algun error o el archivo ya no existe");
            }
        }
    }