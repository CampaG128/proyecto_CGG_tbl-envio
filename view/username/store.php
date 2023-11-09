<?php
    require_once("C:/xampp/htdocs/proyecto/controller/usernameController.php");
    $envio = new envioControlador();
    $envio->guardar($_POST['id_producto'],$_POST['direccion'],$_POST['pais'],$_POST['envio'],$_POST['precio'],$_POST['paqueteria'],$_POST['nombre']);
?>


