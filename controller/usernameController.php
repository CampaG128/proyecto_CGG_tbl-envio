<?php
    class envioControlador{
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new envioModelo();
        }   
        public function guardar($id_producto,$direccion,$pais,$coste,$total,$paqueteria,$nombre){
            $id = $this->model->insertar($id_producto,$direccion,$pais,$coste,$total,$paqueteria,$nombre);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id_envio,$id_producto,$direccion,$pais,$coste,$total,$paqueteria,$nombre){
            return ($this->model->update($id_envio,$id_producto,$direccion,$pais,$coste,$total,$paqueteria,$nombre) != false) ? header("Location:show.php?id=".$id_envio) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>