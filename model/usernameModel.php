<?php
    class envioModelo{

        private $PDO;
        public function __construct()

        {
            require_once("C:/xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($id_producto,$direccion,$pais,$coste,$total,$paqueteria,$nombre){
            $stament = $this->PDO->prepare("INSERT INTO envio (id_producto,direccion_envio,pais_envio,envio_coste,total,paqueteria,nombre_cuenta) VALUES (:id_producto,:direccion,:pais,:coste,:total,:paqueteria,:nombre)");
            $stament->bindParam(":id_producto",$id_producto);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":pais",$pais);
            $stament->bindParam(":coste",$coste);
            $stament->bindParam(":total",$total);
            $stament->bindParam(":paqueteria",$paqueteria);
            $stament->bindParam(":nombre",$nombre);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM envio where id_envio = :id_envio limit 1");
            $stament->bindParam(":id_envio",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM envio");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update($id_envio,$id_producto,$direccion,$pais,$coste,$total,$paqueteria,$nombre){
            $stament = $this->PDO->prepare("UPDATE envio SET id_producto = :id_producto, direccion_envio = :direccion_envio, pais_envio = :pais_envio, envio_coste = :envio_coste, total = :total, paqueteria = :paqueteria,  nombre_cuenta = :nombre_cuenta WHERE id_envio = :id_envio");
            $stament->bindParam(":id_producto",$id_producto);
            $stament->bindParam(":direccion_envio",$direccion);
            $stament->bindParam(":pais_envio",$pais);
            $stament->bindParam(":envio_coste",$coste);
            $stament->bindParam(":total",$total);
            $stament->bindParam(":paqueteria",$paqueteria);
            $stament->bindParam(":nombre_cuenta",$nombre);
            $stament->bindParam(":id_envio",$id_envio);
            return ($stament->execute()) ? $id_envio : false;
        }

        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM envio WHERE id_envio = :id_envio");
            $stament->bindParam(":id_envio",$id);
            return ($stament->execute()) ? true : false;
        }
        
    }

?>