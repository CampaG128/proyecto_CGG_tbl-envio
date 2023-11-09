<?php
    require_once("C:/xampp/htdocs/proyecto/controller/usernameController.php");
    $envio = new envioControlador();
    $envio->delete($_GET['id']);

?>